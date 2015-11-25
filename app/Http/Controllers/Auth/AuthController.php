<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Checker\Checker;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'email'     => $data['email'],
            'username'  => $data['username'],
            'password'  => bcrypt($data['password']),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function postSignup(Request $request)
    {
        $email      = $request['email'];
        $username   = $request['username'];
        $password   = $request['password'];

        if ( Checker::checkByUserEmail($email) === "present" || Checker::checkByUserName($username) === "present") 
        {
            $response = "Failed";
            return view('app.pages.signup', compact('response'));
        }
        else
        {
            $this->create($request->all());
            return redirect('/');
        };

        return $response;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function postSignin(Request $request)
    {
        $status = Auth::attempt($request->only(['username', 'password']));
        
        if ( ! $status )
        {
            $response = "Failed";
            return view('app.pages.signin', compact('response'));
        }
        else
        {
            return redirect('/');
        }
    }

    /**
     * Logout current user.
     *
     * @param Request $request
     *
     * @return home
     */
    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }

}
