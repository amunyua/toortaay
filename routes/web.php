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

Route::resource('masterFiles', 'MasterFileController');

Route::group(['prefix' => 'admin'], function() {
    Route::get('routes', 'RoutesController@index');
});

Route::group(['middleware' => 'auth', 'prefix' => 'config'], function(){
    Route::get('committees', 'CommitteeController@index')->name('coms');
    Route::get('committee/{com}', 'CommitteeController@edit');
    Route::post('committee', 'CommitteeController@store');
    Route::put('committee', 'CommitteeController@update');
    Route::delete('committee', 'CommitteeController@destroy');

    Route::get('document-categories', 'DocumentCategoryController@index');
    Route::post('document-category', 'DocumentCategoryController@store');
    Route::get('document-category/{cat}', 'DocumentCategoryController@edit');
    Route::put('document-category', 'DocumentCategoryController@update');
    Route::delete('document-category', 'DocumentCategoryController@destroy');
});

Route::group(['middleware' => 'auth', 'prefix' => 'document-manager'], function(){
    Route::get('upload', 'DocumentManagerController@index');

});

//user management
Route::resource('users', 'UserController');
Route::post("/activatedeactivate/{id}",'UserController@actDeact');


Route::resource('roles', 'RoleController');

Route::resource('audits', 'AuditController');
Route::get('getPermissions/{id}','RoutesController@getPermissions');
//Route::get('getPermissions/{id}','RoutesController@getRoutes');
Route::any('/give-permission/','RoutesController@assignPermissions');





Route::resource('subjects', 'SubjectController');

Route::resource('pupils', 'PupilController');

Route::resource('parents', 'ParentController');

Route::resource('parents', 'ParentsController');

Route::resource('classes', 'ClassesController');