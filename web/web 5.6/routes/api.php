<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/delete-image/{project}/{filename}', 'ImageController@DeleteImage')->name('DeleteImage');
Route::get('/test','ImageController@test');
Route::get('/PicProfile/{CodeName}','ImageController@GetPicProject');
Route::get('/GetPicCaption/{CodeName}','ImageController@GetPicCaption');
Route::post('/CheckCodeProject','CheckData@checkCodeProject');
