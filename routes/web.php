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
    return view('commonHome');
});

Route::get('/doctor', function () {
    return view('doctor.dashboard');
});
Route::prefix('doctor')-> group(function (){
	Route::get('profile', ['uses' => 'DoctorProfileController@index', 'as' => 'doctor.profile']);
    Route::get('dashboard', ['uses' => 'DoctorProfileController@dash', 'as' => 'doctor.dashboard']);
    Route::get('setSchedule', ['uses' => 'DoctorProfileController@setSchedule', 'as' => 'doctor.setSchedule']);
    Route::get('upcomingAppointments', ['uses' => 'DoctorProfileController@upcomingAppointments', 'as' => 'doctor.upcomingAppointments']);
    Route::get('appointmentHistory', ['uses' => 'DoctorProfileController@appointmentHistory', 'as' => 'doctor.appointmentHistory']);
    Route::get('assistantsList', ['uses' => 'DoctorProfileController@assistantsList', 'as' => 'doctor.assistantsList']);
    Route::get('chamber', ['uses' => 'DoctorProfileController@chamber', 'as' => 'doctor.chamber']);


//	Route::get('register', ['uses' => 'DoctorRegisterController@index', 'as' => 'doctor.register']);
    Route::get('list', ['uses' => 'DoctorProfileController@list', 'as' => 'doctor.list']);
});

Route::get('/patient', function () {
    return view('patient.dashboard');
});
Route::prefix('patient')-> group(function (){
	Route::get('profile', ['uses' => 'PatientProfileController@index', 'as' => 'patient.profile']);
    Route::get('dashboard', ['uses' => 'PatientProfileController@dash', 'as' => 'patient.dashboard']);
    Route::get('takeAppointment', ['uses' => 'PatientProfileController@takeAppointment', 'as' => 'patient.takeAppointment']);
    Route::get('upcomingAppointments', ['uses' => 'PatientProfileController@upcomingAppointments', 'as' => 'patient.upcomingAppointments']);
    Route::get('liveChamber', ['uses' => 'PatientProfileController@liveChamber', 'as' => 'patient.liveChamber']);
//	Route::get('register', ['uses' => 'PatientRegisterController@index', 'as' => 'patient.register']);
});





Route::get('/assistant', function () {
    return view('assistant.dashboard');
});
Route::prefix('assistant')-> group(function (){
	Route::get('profile', ['uses' => 'AssistantProfileController@index', 'as' => 'assistant.profile']);
	Route::get('register', ['uses' => 'AssistantRegisterController@dash', 'as' => 'assistant.dashboard']);
});
Route::prefix('authentication')-> group(function (){
	Route::get('login', ['uses' => 'AuthenticationLoginController@index', 'as' => 'authentication.login']);
	
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/success', 'SuccessController@index')->name('success');

Route::prefix('Department')-> group(function (){

//    Route::get('/'  , ['uses' => 'UniversityController@index', 'as' => 'university.index']);

    Route::post('list', ['uses' => 'DepartmentController@getDepartmentList', 'as' => 'department.list']);

//    Route::get('create',['uses' => 'UniversityController@showUniversityCreateForm', 'as' => 'university.create'] );
//
//    Route::post('create',['uses' => 'UniversityController@storeUniversity', 'as' => 'university.store'] );
//
//    Route::get('edit/{id}',['uses' => 'UniversityController@edit', 'as' => 'university.edit'] );
//
//    Route::post('edit/{id}',['uses' => 'UniversityController@update', 'as' => 'university.update'] );
//
//    Route::get('delete/{id}',['uses' => 'UniversityController@destroy', 'as' => 'university.delete'] );
//
//    Route::get('show/{id}',['uses' => 'UniversityController@show', 'as' => 'university.show'] );
//
//
//    Route::get('view',['uses' => 'UniversityController@showUniversityList', 'as' => 'university.view'] );
//
//    Route::post('view',['uses' => 'UniversityController@getUniversityListByLocation', 'as' => 'university.universityListByLocation'] );
});

