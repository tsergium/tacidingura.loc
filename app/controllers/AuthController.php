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
        if(Auth::check()) {
            return Redirect::to('/');
        }
        return View::make('auth.index');
    }

    public function login()
    {
        $email = Input::get('email');
        $password = Input::get('password');
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

	public function create()
	{
		return View::make('auth.create');
	}

	public function store()
	{
		$rules = array(
			'email'				=> 'unique:users,email',
			'password'			=> 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			Session::flash('message', 'Email already exists!');
			return Redirect::to('auth/create')
			               ->withErrors($validator)
			               ->withInput(Input::except('password'));
		} else {
			// store
			$user = new User;
			$user->email			    = Input::get('email');
			$user->password		        = Hash::make(Input::get('password'));
			$user->firstname		    = Input::get('firstname');
			$user->lastname		        = Input::get('lastname');
			$user->status		        = 1; // activate user
			$user->save();
			// redirect
			Session::flash('message', 'Successfully created user!');
			return Redirect::to('auth');
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