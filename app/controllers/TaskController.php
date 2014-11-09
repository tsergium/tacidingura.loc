<?php

class TaskController extends \BaseController {
	protected $layout = 'layouts.master';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$pageName = 'Task List for ' . Project::find($id)->name;
		$results = Task::where('project_id', '=', $id)->orderBy('id', 'DESC')->paginate(20);
		return View::make(
			'task.index',
			array(
				'tasks'			=> $results,
				'project_id'	=> $id,
				'pageName'		=> $pageName
			)
		);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$pageName = 'Create Task';
		return View::make(
			'task.create',
			array(
				'project_id'	=> $id,
				'pageName'		=> $pageName
			)
		);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
        $rules = array(
            'title'				=> 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
            return Redirect::to('task/'.$id.'/create')
                ->withErrors($validator)
				->withInput(Input::except('password'));
        } else {
            // store
            $user = new Task;
            $user->project_id		= $id;
            $user->title			= Input::get('title');
            $user->description		= Input::get('description');
            $user->save();            
            // redirect
            Session::flash('message', 'Successfully created task!');
            return Redirect::to('task/'.$id.'/project');
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
		$task = Task::find($id);
		$pageName = $task->title;
		$projectId = $task->project_id;
		return View::make(
			'task.show',
			array(
				'task'			=> $task,
				'project_id'	=> $projectId,
				'pageName'		=> $pageName
			)
		);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$task = Task::find($id);
		$pageName = $task->title;
		$projectId = $task->project_id;
		
		return View::make(
			'task.edit',
			array(
				'task'			=> $task,
				'project_id'	=> $projectId,
				'pageName'		=> $pageName
			)
		);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$task = Task::find($id);
		$task->update($input);
		
		Session::flash('message', 'Successfully edited task!');
		return Redirect::to('task/'.$task->project_id.'/project');
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
