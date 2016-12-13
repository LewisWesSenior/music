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
    return view('oliver-landing');
});

route::get('/laravelDHP', function() {
	return view('welcome');
});

Route::get('/login', function () {
    return view('login');
	
Route::get('/login1', function () {
    return view('login');
	
//////_--_--_--\\\\\\\\\
Route::get('/test1', function () {
    return view('test1');
	
	Route::get('/test2', function () {
    return view('test2');
	
	Route::get('/test3', function () {
    return view('test3');
	
	Route::get('/test4', function () {
    return view('test4');
	
});