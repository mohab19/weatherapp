<?php

namespace App\Http\Controllers;

use App\Http\Requests\SatelliteRequest;
use Illuminate\Http\Request;
use App\Satellite;

class SatelliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
        $satellites = Satellite::all();
        return view('satellites.index', compact('satellites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang)
    {
        return view('satellites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($lang, SatelliteRequest $request)
    {
        $satellite = Satellite::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Satellite  $satellite
     * @return \Illuminate\Http\Response
     */
    public function show($lang, Satellite $satellite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Satellite  $satellite
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, Satellite $satellite)
    {
        return view('satellites.edit', compact('satellite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Satellite  $satellite
     * @return \Illuminate\Http\Response
     */
    public function update($lang, SatelliteRequest $request, Satellite $satellite)
    {
        $satellite->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Satellite  $satellite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Satellite $satellite)
    {
        $satellite->destroy();
    }

    public function satellite($lang, Satellite $satellite)
    {
        return view('satellites.satellite', compact('satellite'));
    }
}
