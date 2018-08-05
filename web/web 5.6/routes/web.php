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

Route::get('/contact', function () {  })->name('contact');
Route::get('/About', function () { return view('suttikan.about'); })->name('About');
Route::get('/service', function () { return view('suttikan.service'); })->name('service');
Route::get('/login-register', function () { return view('auth.login-register'); })->name('login-register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/UploadProject', 'HomeController@UploadProject')->name('UploadProject');
Route::get('/about', 'HomeController@about')->name('about');
Route::post('/mailsender', 'MailController@MailSender')->name('MailSender');
Route::post('/UploadProjects', 'HomeController@UploadProjects')->name('UploadProjects');
Route::post('/EditProjects/{ProjectName}', 'HomeController@EditProjects')->name('EditProjects');
Route::get('/detail-project', 'HomeController@DetailProject')->name('DetailProject');
Route::get('/detail-project/{CodeName}', 'HomeController@DetailProjectName')->name('DetailProjectName');
Route::get('/delete-project/{Name}/{CodeName}', 'HomeController@DeleteProjectName')->name('DeleteProjectName');

//UserPageController
Route::get('/', 'UserPageController@main')->name('/');
Route::get('/test', function () {
    return 'Hello World';
})->name('/test');
Route::get('/project-main', 'UserPageController@UserPageController')->name('projectmain');
Route::get('/contact', 'UserPageController@contact')->name('contact');
Route::get('/home-service', 'UserPageController@HomeService')->name('HomeService');
Route::get('/project-detail/{codename}', 'UserPageController@projectdetail')->name('projectlist');

