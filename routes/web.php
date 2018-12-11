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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/{user_id}/profile/{profile_id}', 'ProfileController@show')->name('profile.show');
Route::get('/user/{user_id}/profile', 'ProfileController@create')->name('profile.create');
Route::get('/user/{user_id}/profile/{profile_id}/edit', 'ProfileController@edit')->name('profile.edit');
Route::get('/questions/{question_id}/answers/create', 'AnswerController@create')->name('answers.create');
Route::get('/questions/{question_id}/answers/{answer_id}', 'AnswerController@show')->name('answers.show');





Route::resources([
    'questions' => 'QuestionController',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
