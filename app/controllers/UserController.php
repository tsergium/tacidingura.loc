<?php

class UserController extends \BaseController {
	protected $layout = 'layouts.master';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pageName = 'Users List';
		$results = User::paginate(12);
		return View::make('user.index', array('users' => $results, 'pageName' => $pageName));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        if(!Auth::check()) {
            return Redirect::to('user');
        }

		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'firstname'		=> 'required',
            'lastname'		=> 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
        // process the mata
        if ($validator->fails()) {
            return Redirect::to('user/create')
                ->withErrors($validator)
				->withInput(Input::except('password'));
        } else {
            // store
            $user = new User;
            $user->firstname	= Input::get('firstname');
            $user->lastname		= Input::get('lastname');
            $user->gender		= Input::get('gender');
            $user->facebook_id  = Input::get('facebook_id');
            $user->save();
            //DB::insert('insert into users (firstname, lastname, gender) values (?, ?)', array(Input::get('firstname'), Input::get('lastname'), Input::get('gender')));
            // redirect
            Session::flash('message', 'Successfully created user!');
            return Redirect::to('user');
        }
	}


	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		return View::make('user.show', array('user' => $user));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return View::make('user.edit', array('user' => $user));
	}
}
