<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return View::make('home');
});

Route::get('/feedback', function(){
	return View::make('feedback');
});

Route::post('feedback', function(){

	$data=Input::all();
	$rules=array(
			'event_name' => 'required',
			'event_heard_from' => 'required',						// => is separator for assosciative array
			'one' => 'required',
			'two' => 'required',
			'three' => 'required',
			'four' => 'required',
			'five' => 'required',
			'organized' => 'required',
			'overall' =>'required'
		);

	$validator=Validator::make($data,$rules);
	if($validator->fails()){
		return Redirect::to('feedback')->withErrors($validator)->withInput();
	}

	$feedbackcontent=array(
			'event_name' => $data['event_name'],					// key(just like indexes) => value;
			'event_heard_from' => $data['event_heard_from'],
			'one' => $data['one'],
			'two' => $data['two'],
			'three' => $data['three'],
			'four' => $data['four'],
			'five' => $data['five'],
			'organized' => $data['organized'],
			'overall' => $data['overall'],
			'suggestions' => $data['suggestions']
		);
	
	Mail::send('/send_mail _template',$feedbackcontent,function($message)
		{
			$message->to('bholajrs@gmail.com','Bhola')->subject('Someone gave feedback to GLUG Event')->from('feedback@glug.com');
		});

	return 'Feedback has been submitted!!!!!';
});


