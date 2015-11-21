<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index($id)
    {
        $user =  User::get()->find($id);
        return view('app.pages.user', compact('user'));
    }

    public function edit($id)
    {
        $user =  User::get()->find($id);
        return view('app.pages.edit_user', compact('user'));
    }
    
    public function update(Request $request)
    {
        $id = Auth::user()->id;
        User::where('id', $id)->update(['avater'      => $request['avater']]);
        User::where('id', $id)->update(['username'    => $request['username']]);
        User::where('id', $id)->update(['occupation'  => $request['occupation']]);
        return redirect('user/$id');
    }  

}
