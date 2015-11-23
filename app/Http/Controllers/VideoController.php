<?php

namespace App\Http\Controllers;

use App\User;
use App\Video;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'src'       => $data['src'],
            'title'     => $data['title'],
            'user_id'   => Auth::user()->id,
            'category'  => $data['category'],
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

    public function show($category, $id)
    {
        $video      = Video::all()->where('category', $category)->find($id);
        $feature    = Video::all()->where('category', $category)->random()->take(4);
        
        $data = 
        [
            "video"     => $video,
            "feature"   => $feature
        ];

        return view('app.pages.play_video', compact('data'));
    }


    public function user()
    {
        $categorys =  User::all();

        foreach ($categorys as $value) 
        {
            $categorys = $value->video;
        }

        return view('app.pages.view', compact('categorys'));
    }

}
