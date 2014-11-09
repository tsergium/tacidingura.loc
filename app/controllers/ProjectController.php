<?php

class ProjectController extends \BaseController {
	protected $layout = 'layouts.master';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pageName = 'Projects List';
		$results = Project::orderBy('id', 'DESC')->paginate(20);
		return View::make('project.index', array('projects' => $results, 'pageName' => $pageName));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$pageName = 'Create Project';
		return View::make(
			'project.create',
			array(
				'pageName'		=> $pageName
			)
		);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $rules = array(
            'name'				=> 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
            return Redirect::to('project/create')
                ->withErrors($validator)
				->withInput(Input::except('password'));
        } else {
            // store
            $project = new Project;
            $project->name			= Input::get('name');
            $project->description		= Input::get('description');
            $project->save();            
            // redirect
            Session::flash('message', 'Successfully created project!');
            return Redirect::to('projects');
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
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}