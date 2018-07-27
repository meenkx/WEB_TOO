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

Route::get('/', function () { return view('main'); })->name('/');
Route::get('/contact', function () { return view('suttikan.contact'); })->name('contact');
Route::get('/About', function () { return view('suttikan.about'); })->name('About');
Route::get('/service', function () { return view('suttikan.service'); })->name('service');
Route::get('/project-main', function () { return view('suttikan.project.projectmain'); })->name('projectmain');
Route::get('/project-detail', function () { return view('suttikan.project.project-list'); })->name('projectlist');
Route::get('/login-register', function () { return view('auth.login-register'); })->name('login-register');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::post('/mailsender', 'MailController@MailSender')->name('MailSender');

