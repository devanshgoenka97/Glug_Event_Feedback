<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class TasksController extends BaseController
{
	public function home()
	{
		$tasks = \App\Task::all();
		return \View::make('home', compact('tasks'));
	}

	public function create()
	{
		return \View::make('create');
	}

	public function edit()
	{
		return \View::make('edit');
	}

	public function delete()
	{
		return \View::make('delete');
	}

	public function saveCreate()
	{
		$input = \Input::all();
		$task = new \App\Task;
		$task->title = $input['title'];
		$task->body = $input['body'];
		$task->user_id = $input['user_id'];
		$task->done=true;
		$task->save();

		return \Redirect::action('TasksController@home');
	}

}