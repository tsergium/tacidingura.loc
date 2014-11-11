<?php
/**
 * Created by PhpStorm.
 * User: tsergium
 * Date: 11/11/2014
 * Time: 10:37 AM
 */
class AuthController extends \BaseController {
    protected $layout = 'layouts.master';

    public function index()
    {

        return View::make('auth.index');
    }

    public function login()
    {
        $email = "tsergium@gmail.com";
        $password = "luxaeterna";
        $status = 1;

        if(!Auth::check()) {
            $user = User::whereRaw('email = ? AND status = ?', array($email, $status))->first(); // check user
            if ($user) {
                if (Hash::check($password, $user->password)) // check password
                {
                    if(Auth::loginUsingId($user->id))
                    {
                        return Redirect::to('/');
                    }
                }
            }
        }
    }

    public function logout()
    {
        if(Auth::check()) {
            Auth::logout();
        }
        return Redirect::to('/');
    }
}