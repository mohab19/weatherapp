<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Http\Requests\TypeRequest;
use Illuminate\Http\Request;
use App\Radar;
use App\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $types = Type::all();
        return view('types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $radars = Radar::all();
        return view('types.create', compact('radars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($lang, TypeRequest $request) {
        $type = Type::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show($lang, Type $type) {
        return view('types.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, Type $type) {
        $radars = Radar::all();
        return view('types.edit', compact('type', 'radars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update($lang, TypeRequest $request, Type $type) {
        $type->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, Type $type) {
        $type->delete();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTypes($id) {
        $types = Type::where('radar_id', $id)->get();
        return $types;
    }

    public function Precipitation()
    {
        $types = Type::where('precipitation', 1)->get();
        return view('radars.rain_radar', compact('types'));
    }
}
