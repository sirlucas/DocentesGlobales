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


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes

    Route::get('formin/ddca', 'PdfController@ddca')->name('formin/ddca');
    Route::get('formin/fpv', 'PdfController@fpv')->name('formin/fpv');
    Route::get('formin/facultad', 'PdfController@facultad')->name('formin/facultad');
    Route::get('formin/drrhh', 'PdfController@drrhh')->name('formin/drrhh');


    Route::get('formin/getCities','FormulariosInController@getCities');
    Route::get('formin/getCareer','FormulariosInController@getCarrer');
    Route::get('formin/{id}/reciclar', 'FormulariosInController@reciclar')->name('formin/reciclar');
    Route::resource('formin','FormulariosInController');


});
