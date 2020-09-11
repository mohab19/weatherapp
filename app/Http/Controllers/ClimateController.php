<?php

namespace App\Http\Controllers;

use App\Climate;
use Illuminate\Http\Request;

class ClimateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('climate.climate');
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
     * @param  \App\Climate  $climate
     * @return \Illuminate\Http\Response
     */
    public function show(Climate $climate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Climate  $climate
     * @return \Illuminate\Http\Response
     */
    public function edit(Climate $climate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Climate  $climate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Climate $climate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Climate  $climate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Climate $climate)
    {
        //
    }
}
