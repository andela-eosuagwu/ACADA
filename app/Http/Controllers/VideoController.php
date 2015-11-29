<?php

namespace ACADA\Http\Controllers;

use ACADA\User;
use ACADA\Video;
use ACADA\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ACADA\Http\Controllers\Controller;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos =  Video::get()->take(4);
        return view('app.pages.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.pages.create');
    }

    protected function save(array $data)
    {
        Video::create([
            'src'       => $data['src'],
            'title'     => $data['title'],
            'user_id'   => 1,
            'categories'  => $data['categories'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->save($request->all());        
        $response = "success";
        return view('app.pages.create', compact('response'));
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

    public function show($category, $title)
    {
        $video  = Video::get()->where('title', $title);
        return view('app.pages.play_video', compact('video'));
    }

    public function categories($category)
    {
        $categories =  Video::where('categories', $category)->get();
        return view('app.pages.category', compact('categories'));
    }

    public function user()
    {
        $categories =  User::all();
        foreach ($categories as $value) 
        {
            $categories = $value->video;
        }
        return view('app.pages.view', compact('categories'));
    }


}
