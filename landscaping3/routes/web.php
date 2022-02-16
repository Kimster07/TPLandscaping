<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'LandscapingController@index');
Route::get('/about', 'LandscapingController@about');
Route::get('/services', 'LandscapingController@services');

//above are the routes to get the index view, about view and services view

//auth for the routes below
Auth::routes();
                                                                                //all the below routes are for authunticated user only //no guest access
Route::get('/home', 'HomeController@index')->name('home');                      //returns view home via HomeController public function index
Route::get('book', 'AppointmentsController@create')->name('Booking Form');      //returns view booking form via AppointmentsController public function create
Route::post('/appointments', 'AppointmentsController@store');                   //route to initiate post request via AppointmentsController public function store
Route::get('appointments', 'AppointmentsController@show');                      //returns view appointments via AppointmentsController public function show
Route::get('edit/{id}', 'Appointmentscontroller@edit');                         //returns view update form via AppointmentsController public function edit
Route::post('/updateappointments', 'Appointmentscontroller@update');            //route to initiate post request to update appointment via AppointmentsController public function update
Route::get('delete/{id}', 'Appointmentscontroller@destroy');                    //route starts delete request for the appointment for the given id

