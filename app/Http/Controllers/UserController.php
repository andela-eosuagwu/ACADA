<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

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
        User::where('id', $id)->update(['avater'      => $request['avater']]);
        return redirect("user");
    }  

}
