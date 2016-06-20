<?php

namespace ACADA\Http\Controllers;

use ACADA\User;
use ACADA\Video;
use ACADA\Favourite;
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
        
        return view('app.index', compact('video_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.upload');
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

        return view('app.upload', compact('response'));
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

        $video_data  = Video::where('id', $id)->with('favourites')->get()->first();

        $favourite_ids = $video_data->favourites;

        $video_data->views = $video_data->views + 1;
        $video_data->save();

        $related_video =  Video::where('categories', $video_data->categories)->take(3)->get();

        $is_like_episode = false;
        
        if ( ! Auth::check() ) {
            $status =  "must_login";
        }
        else {

            foreach ($favourite_ids as $id) {
                if ($id->user_id == Auth::user()->id) {
                    $is_like_episode = true;
                    break;
                }
            }


            if ($is_like_episode) {
                $status = "dislike";
            }
            else {
                $status = "like";
            }
        }


        $video_data->related_video = $related_video;
        $video_data->favourite_status = $status;
        
        if( ! Auth::check() )
        {
            return redirect = "/auth/login";
        }
        
        $video_data->user_id = Auth::user()->id;
        
        //$video_data;
        return view('app.player', compact('video_data'));
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

    public function favourite()
    {
        $user =  User::where('id', Auth::user()->id)->with('favourite')->get()->first();

        $favourite_id   = $user->favourite;
        $favourite      =  $favourite_id->pluck('video_id');
        $favourite      = Video::whereIn('id', $favourite)->get();

        $data =
        [
            "user"          =>$user,
            "favourite"     => $favourite
        ];

        return view('app.favourite', compact('data'));
    }

}
