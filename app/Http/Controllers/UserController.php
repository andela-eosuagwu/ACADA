<?php

namespace App\Http\Controllers;

use App\User;
use Cloudder;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input as Input;

class UserController extends Controller
{
    public function index()
    {
        $user =  User::find(1)->get();
        return view('app.pages.user', compact('user'));
    }

    public function edit()
    {
        $user =  User::where('id', 1)->get();
        return view('app.pages.edit_user', compact('user'));
        
    }

    public function update(Request $request)
    {
        //$id = Auth::user()->id;
        $id = 1;
        $avater_url = $this->getImageUrl($request['avatar']);
        User::where('id', $id)->update(['username' => $request['username'], 'avatar' => $avater_url, 'occupation' => $request['occupation']]);
        return redirect("user");        
    }  

    public function getImageUrl ()
    {
        $image = Input::file('avatar');
        Cloudder::upload($image, null);
        return $imgUrl = Cloudder::getResult()['url'];
    }

}
