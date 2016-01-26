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
        $video_data =  $this->videoRepository->getAllVideo();

        $video_data->each(function ($video_data, $key) {
            $video_data->like_status = "can_dislike";
            $video_data->favourite_status = "can_favourite";
        });

        return view('app.index', compact('video_data'));
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
            'src'           => $data['src'],
            'title'         => $data['title'],
            'user_id'       => Auth::user()->id,
            'categories'    => $data['categories'],
            'description'    => $data['description'],
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
        $categorys =  Video::where('category', $category);
        return view('app.pages.category', compact('categorys'));
    }

    public function show($id)
    {
        $video  = Video::where('id', $id)->get()->first();

        $video->like_status = "like";
        $video->favourite_status = "unfavourite";

        $related_video =  Video::where('categories', $video->categories)->take(5)->get();
        $data =
        [
            "video"         => $video,
            "related_video" => $related_video
        ];

        //return $data;
        return view('app.player', compact('data'));
    }

    public function categories($category)
    {
        $categories =  Video::where('categories', $category)->get();

        $data =
        [
            "title"         => $category,
            "categories"    => $categories
        ];

        return view('app.category', compact('data'));
    }

    public function user()
    {
        $categories =  User::where('id', Auth::user()->id)->get();

        foreach ($categories as $value)
        {
            $categories = $value->video;
        }
        return view('app.pages.view', compact('categories'));
    }


}
