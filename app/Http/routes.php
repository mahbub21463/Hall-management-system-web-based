<?php



Route::group(['middleware' => ['web']], function () {
    //

	Route::resource('students','StudentController');


	Route::resource('payments','PaymentController');

	Route::resource('complaints','ComplaintsController');

	Route::resource('dues','DueController');
   



	Route::get('/', function(){
		return view('home');
	});
	


	Route::post('/login','Auth\AuthController@login');
	Route::get('/logout','Auth\AuthController@logout');
	Route::get('/search','QueryController@search');
	Route::get('/approve','StudentController@approve');
	Route::get('/downloadStudentList','StudentController@downloadStudentList');
	Route::get('/temp-students',['as' => 'temp-students.show', 'uses' => 'StudentController@showTempStudents']);

	// Route::resource('profile', 'ProfileController@profile');

	// Route::get('/profile-edit', 'HomeController@editProfile');

	Route::put('profile-update/{id}', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);

	Route::get('profile', ['as' => 'profile.show', 'uses' => 'ProfileController@show']);
	Route::get('profile-edit', ['as' => 'profile-edit', 'uses' => 'ProfileController@edit']);


	
});




?>

