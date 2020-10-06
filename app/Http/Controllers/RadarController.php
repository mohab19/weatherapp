<?php

namespace App\Http\Controllers;

use App\Http\Requests\RadarRequest;
use Illuminate\Http\Request;
use App\Radar;
use App\Type;

class RadarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index() {
        $radars = Radar::all();
        return view('radars.index', compact('radars'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('radars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($lang, RadarRequest $request) {
        if($request->image) {
            $imageName = time().'_'.$request->input('writer').'.'.$request->file('image')->getClientOriginalExtension();
            request()->image->move(public_path('images/radars'), $imageName);
        } else {
            $imageName = null;
        }

        $radar = Radar::create([
            'title'               => $request->title,
            'name'                => $request->name,
            'basc_url'            => $request->basc_url,
            'url_call'            => $request->url_call,
            'time_format'         => $request->time_format,
            'sprint_digits'       => $request->sprint_digits,
            'time_interval'       => $request->time_interval,
            'time_limits'         => $request->time_limits,
            'start_from'          => $request->start_from,
            'image'               => $imageName
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Radar  $category
     * @return \Illuminate\Http\Response
     */
    public function show($lang, Radar $radar) {
        return view('radars.show', compact('radar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Radar  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, Radar $radar) {
        return view('radars.edit', compact('radar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Radar  $category
     * @return \Illuminate\Http\Response
     */
    public function update($lang, RadarRequest $request, Radar $radar) {
        if($request->hasFile('image')) {
            $imageName = time().'_'.$request->input('name').'.'.$request->file('image')->getClientOriginalExtension();
            request()->image->move(public_path('images/categories'), $imageName);
        } else {
            $imageName = $radar->image;
        }

        $radar->update([
            'title'               => $request->title,
            'name'                => $request->name,
            'basc_url'            => $request->basc_url,
            'url_call'            => $request->url_call,
            'time_format'         => $request->time_format,
            'sprint_digits'       => $request->sprint_digits,
            'time_interval'       => $request->time_interval,
            'time_limits'         => $request->time_limits,
            'start_from'          => $request->start_from,
            'image'               => $imageName
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Radar  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, Radar $radar) {
        $radar->delete();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Radar($id) {
        $radar = Radar::find($id);
        return view('radars.radar', compact('types', 'radar'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRadars() {
        $radars = Radar::all();
        return $radars;
    }

    public function radars($lang, Radar $radar)
    {
        return view('radars.radar', compact('radar'));
    }
}
