<?php

namespace App\Http\Controllers;

use App\Radar;
use Illuminate\Http\Request;

class RadarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('radar.radar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Radar  $radar
     * @return \Illuminate\Http\Response
     */
    public function show(Radar $radar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Radar  $radar
     * @return \Illuminate\Http\Response
     */
    public function edit(Radar $radar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Radar  $radar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Radar $radar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Radar  $radar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Radar $radar)
    {
        //
    }
}
