<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('questions', 'QuestionsController')->except('show');

//디테일보기 페이지 슬러그사용
Route::get('/questions/{slug}', 'QuestionsController@show')->name('questions.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
