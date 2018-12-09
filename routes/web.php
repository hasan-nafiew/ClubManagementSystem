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


Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

//website controller
Route::get('/', 'WebsiteController@index')->name('');
Route::get('/menu', 'WebsiteController@menu')->name('');
Route::get('/contact', 'WebsiteController@contact')->name('');
Route::post('/contactus/submit','WebsiteController@insert_contactus')->name('');


//admin controller 
//Route::get('/home', 'HomeController@index')->name('');
Route::get('admin', 'AdminController@index')->name('');

//user controller
Route::get('/admin/user', 'UserController@index')->name('');
Route::get('/admin/user/add', 'UserController@add')->name('');

//members Controller
Route::get('/admin/member/', 'MemberController@index')->name('');
Route::get('/admin/member/add', 'MemberController@add')->name('');
Route::post('admin/member/submit','MemberController@add_member')->name('');


//contactus Controller
Route::get('/admin/contactus', 'ContactusController@index')->name('');
Route::get('/admin/contactus/view/{id}', 'ContactusController@view')->name('');
Route::get('/admin/contactus/softdelete/{id}', 'ContactusController@soft_delete')->name('');

//RecycleController
Route::get('admin/recycle','RecycleController@index')->name('');


Route::get('/date', function(){
    return view('date');
});