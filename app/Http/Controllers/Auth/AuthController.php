<?php

namespace ACADA\Http\Controllers\Auth;

use Auth;
use Validator;
use ACADA\User;
use Illuminate\Http\Request;
use ACADA\Http\Checker\Checker;
use Illuminate\Mail\Mailer as Mail;
use ACADA\Http\Controllers\Controller;
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
    public function __construct(Mail $mail)
    {
        $this->mail = $mail;
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

        $this->send('email.welcome', ['name' => $data['username']], function ($message) use ($data)
        {
            $message->from(getenv('SENDER_ADDERSS'), getenv('SENDER_NAME'));
            $message->to($data('email'))->subject('Welcme to ACADA');
        });
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function postRegister(Request $request)
    {

        $email      = $request['email'];
        $username   = $request['username'];
        $password   = $request['password'];

        if ( Checker::checkByUserEmail($email) === "present" || Checker::checkByUserName($username) === "present")
        {
            $response = "Failed";
            return view('app.register', compact('response'));
        }
        else
        {
            $this->create($request->all());
            $this->postLogin($request);
            return redirect('/');
        };
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function postLogin(Request $request)
    {
        $status = Auth::attempt($request->only(['username', 'password']));
        
        if ( ! $status )
        {
            $response = "Failed";
            return view('app.login', compact('response'));
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
