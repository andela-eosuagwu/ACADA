<?php

namespace App\Http\Controllers;

use Auth;
use Socialite;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OauthController extends Controller
{

    public function getSocialRedirect(Request $request, $provider )
    {
        if( !($request->has('code') || $request->has('oauth_token')))
        {
            return Socialite::driver( $provider )->redirect();
        }
    }

    public function getOauth($provider)
    {
         dd(Socialite::driver( $provider )->user());
    }


    public function userHasLoggedIn()
    {
        return redirect('/');
    }


}
