<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

//Question
Route::get('channel/{channel}', 'QuestionController@showByChannel');
Route::get('question/ask', 'QuestionController@askForm');
Route::post('question/store', 'QuestionController@store');
Route::get('question/{question}', 'QuestionController@show');
Route::get('question/{question}/edit', 'QuestionController@edit')->name('question_edit');
Route::patch('question/{question}', 'QuestionController@update');
Route::delete('question/{question}', 'QuestionController@destroy');

//Answer
Route::post('question/answer', 'AnswerController@answer');
Route::post('answer/{answer}/mark', 'AnswerController@markAnswer')->name('answer_mark');

//Profile
Route::get('profile/{user}/info', 'ProfileController@showInfo')->name('user_info');
Route::get('profile/{user}/answers', 'ProfileController@showAnswers')->name('user_answers');
Route::get('profile/{user}/questions', 'ProfileController@showQuestions')->name('user_questions');

//Settings
Route::get('settings/info', 'SettingsController@showInfo');
Route::patch('settings/info', 'SettingsController@updateInfo');
Route::get('settings/mailing', 'SettingsController@showMailing');
Route::patch('settings/mailing', 'SettingsController@updateMailing');

//Sidebar
Route::get('channels', 'SidebarController@showAllChannels');
Route::get('users', 'SidebarController@showAllUsers');
Route::get('questions', 'SidebarController@showAllQuestions');

//User
Route::get('/', 'UserController@index');
Route::post('subscribe/{channel}', 'UserController@toggleSubscription');
