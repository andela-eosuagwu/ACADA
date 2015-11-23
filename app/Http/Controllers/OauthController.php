<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Checker\Checker;
use App\Repos\AuthenticateUser;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class OauthController extends Controller
{

    private $auth;
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    private $oauth_data;

    public function getSocialLogin(AuthenticateUser $authenticate, Request $request, $provider )
    {
        return $authenticate->execute( $request->has('code') || $request->has('oauth_token'), $provider, $this);
    }
    
    public function userAuthenticated( $user )
    {
        $authUser = $this->findBySocaialIdOrCreate($user);
        $this->auth->login($authUser,true);
        return redirect('/');
    }

    protected function create($data)
    {
        User::create([
            'email'     => $data['email'],
            'username'  => $data['username'],
            'oauth'     => $data['id'],
        ]);

        return redirect('/');
    }

    public function findBySocaialIdOrCreate($user)
    {
        $authUser = User::firstOrNew(['oauth'=> $user->id]);

        if (! is_null($authUser->id)) {
            return $authUser;
        }

        $authUser->username = ($user->name) ? $user->name : $user->nickname;
        $authUser->email = ($user->email)? $user->email: "";
        $authUser->password = bcrypt($user->id);
        $authUser->oauth = $user->id;
        $authUser->avater = $user->avatar;


        return $authUser;
    }
}
