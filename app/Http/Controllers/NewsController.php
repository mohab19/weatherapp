<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;
use App\Category;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = Category::all();
        return view('news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($lang, NewsRequest $request) {
        $imageName = time().'_'.$request->input('writer').'.'.$request->file('image')->getClientOriginalExtension();
        request()->image->move(public_path('images/news'), $imageName);

        $news = News::create([
            'category_id'   => $request->category_id,
            'title_ar'      => $request->title_ar,
            'title_en'      => $request->title_en,
            'writer'        => $request->writer,
            'description'   => $request->description,
            'image'         => $imageName,
        ]);

        if($news)
            return response(200);
        else
            return response(500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($lang, News $news)
    {
        return $news;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, News $news) {
        $categories = Category::all();
        return view('news.edit', compact('categories', 'news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($lang, NewsRequest $request, News $news) {

        if($request->hasFile('image')) {
            $imageName = time().'_'.$request->input('name').'.'.$request->file('image')->getClientOriginalExtension();
            request()->image->move(public_path('images/uploaded'), $imageName);
        } else {
            $imageName = $news->image;
        }

        $news->update([
            'category_id'   => $request->category_id,
            'title_ar'      => $request->title_ar,
            'title_en'      => $request->title_en,
            'writer'        => $request->writer,
            'description'   => $request->description,
            'image'         => $imageName,
        ]);

        if($news)
            return response(200);
        else
            return response(500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, News $news) {
        $news->delete();

        if($news)
            return response(200);
        else
            return response(500);
    }

}
