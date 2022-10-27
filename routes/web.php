<?php

use Illuminate\Support\Facades\Route;


Route::get('/','App\Http\Controllers\HomeController@home');
Route::get('/about','App\Http\Controllers\HomeController@about');
Route::get('/blog','App\Http\Controllers\HomeController@blog');
Route::get('/contact','App\Http\Controllers\HomeController@contact');
Route::get('/cours','App\Http\Controllers\HomeController@cours');
Route::get('/events','App\Http\Controllers\HomeController@events');
Route::get('/aide','App\Http\Controllers\HomeController@aide');
Route::get('/ajoutercours','App\Http\Controllers\CoursController@ajoutercours');
Route::get('/affichercours','App\Http\Controllers\CoursController@affichercours');
Route::get('/cours-single','App\Http\Controllers\CoursController@cours_single');
Route::get('/loogin','App\Http\Controllers\CoursController@loogin');
Route::get('/signup','App\Http\Controllers\CoursController@signup');
Route::post('/sauvercours','App\Http\Controllers\CoursController@sauvercours');
Route::post('/creer_compte','App\Http\Controllers\CoursController@creer_compte');
Route::post('/acceder_compte','App\Http\Controllers\CoursController@acceder_compte');
Route::get('/event-single','App\Http\Controllers\HomeController@eventsingle');


