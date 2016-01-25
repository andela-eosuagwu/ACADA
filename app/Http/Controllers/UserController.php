<?php

namespace ACADA\Http\Controllers;

use Cloudder;
use ACADA\User;
use ACADA\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ACADA\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input as Input;

class UserController extends Controller
{
    public function index()
    {
        $data = User::where('id', 1)
        ->with('favourite', 'view', 'likes')
        ->get()->first();

        return view('app.video', compact('data'));
    }

    public function edit()
    {
        $user = User::where('id', Auth::user()->id)->get();
        return view('app.pages.edit_user', compact('user'));

    }

    public function update(Request $request)
    {
        $id     = Auth::user()->id;
        $user   = User::find($id);

        if (  $request['avatar'])
        {
            $avater_url = $this->getImageUrl($request['avatar']);
            $user->avatar = $avater_url;
        }

        $user->occupation   = $request['occupation'];
        $user->username     = $request['username'];
        $user->save();
        return redirect("user");
    }

    public function getImageUrl ()
    {
        $image = Input::file('avatar');
        Cloudder::upload($image, null);
        return $imgUrl = Cloudder::getResult()['url'];
    }

}
