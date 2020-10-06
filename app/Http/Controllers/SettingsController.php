<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingsRequest;
use Illuminate\Http\Request;
use App\Settings;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
        $settings = Settings::all();
        return view('settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang)
    {
        return view('settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($lang, SettingsRequest $request)
    {
        if($request->image) {
            $imageName = time().'_'.$request->input('writer').'.'.$request->file('image')->getClientOriginalExtension();
            request()->image->move(public_path('images/settings'), $imageName);
        } else {
            $imageName = "";
        }

        $setting = Settings::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'type'     => $request->type,
            'name'     => $request->name,
            'value'    => $request->value,
            'image'    => $imageName
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $id)
    {
        $settings = Settings::findOrFail($id);
        return view('settings.edit', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update($lang, SettingsRequest $request, $id)
    {
        $setting = Settings::find($id);

        if($request->image) {
            $imageName = time().'_'.$request->input('writer').'.'.$request->file('image')->getClientOriginalExtension();
            request()->image->move(public_path('images/settings'), $imageName);
        } else {
            $imageName = $setting->image;
        }

        $setting->update([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'type'     => $request->type,
            'name'     => $request->name,
            'value'    => $request->value,
            'image'    => $imageName
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, Settings $settings)
    {
        $setting->destroy();
    }

    public function getSettings()
    {
        $setting = Settings::where('name', 'subscription_amount')->first();

        return $setting;
    }
}
