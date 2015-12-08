<?php

namespace ACADA\Http\Controllers;

use ACADA\Video;
use ACADA\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ACADA\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = $request['title'];
        $categories = DB::select("SELECT * FROM videos WHERE title like '%$title%'");
        return view('app.pages.category', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function category($category)
    {
        $categorys =  Video::all()->where('category', $category);
        return view('app.pages.category', compact('categorys'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category, $id)
    {
        //$video = Video::all()->where('category', 'php')->find($id);
        $video      = Video::all()->where('category', 'php')->find($id);
        $feature    = Video::all()->where('category', 'php')->take(4);
        
        $data = 
        [
            "video"     => $video,
            "feature"   => $feature
        ];

        return view('app.pages.play_video', compact('data'));
    }
}
