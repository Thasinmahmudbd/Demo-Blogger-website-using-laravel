<?php

use Illuminate\Support\Facades\Route;

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

/* admin routes */

    /* login routes */

Route::view('/admin/login','admin/login');
Route::post('/admin/login_submit','App\Http\Controllers\Admin_authority@login_submit');

Route::get('/admin/logout', function () {
    session()->forget('BLOG_USER_ID');
    return redirect('/admin/login');
});

Route::group(['middleware'=>['admin_auth']],function(){

    /* post routes */

    Route::get('/admin/post/list','App\Http\Controllers\admin\post@listing');

    Route::view('/admin/post/add','admin/post/add');

    Route::post('/admin/post/submit','App\Http\Controllers\admin\post@submit');

    Route::get('/admin/post/delete/{id}','App\Http\Controllers\admin\post@delete');

    Route::get('/admin/post/edit/{id}','App\Http\Controllers\admin\post@edit');

    Route::post('/admin/post/update/{id}','App\Http\Controllers\admin\post@update');


    /* page routes */

    Route::get('/admin/page/list','App\Http\Controllers\admin\page@listing');

    Route::view('/admin/page/add','admin/page/add');

    Route::post('/admin/page/submit','App\Http\Controllers\admin\page@submit');

    Route::get('/admin/page/delete/{id}','App\Http\Controllers\admin\page@delete');

    Route::get('/admin/page/edit/{id}','App\Http\Controllers\admin\page@edit');

    Route::post('/admin/page/update/{id}','App\Http\Controllers\admin\page@update');


    /* contact routes */

    Route::get('/admin/contact/list','App\Http\Controllers\admin\contact@listing');

    Route::get('/admin/contact/delete/{id}','App\Http\Controllers\admin\contact@delete');

});