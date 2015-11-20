<?php

namespace App\Http\Controllers;

use App\Video;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
            'category'  => $data['category'],
            'title'     => $data['title'],
            'src'       => $data['src']
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
        $link       =  $request['src'];
        $title      =  $request['title'];
        $category   =  $request['category'];

        $this->save($request->all());
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
        $video      = Video::all()->where('category', $category)->find($id);
        $feature    = Video::all()->where('category', $category)->take(4);
        
        $data = 
        [
            "video"     => $video,
            "feature"   => $feature
        ];

        return view('app.pages.play_video', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
