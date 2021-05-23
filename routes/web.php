<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
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
// Route::get('/about', [WebsiteController::class, 'about']);


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/website','webController@index')->name('website_index');

Route::get('/products','webController@products')->name('website_products');
Route::get('/details','webController@details')->name('website_details');
Route::get('/cart','webController@cart')->name('website_cart');


Route::get('/', function () {
    return view('welcome');
});

// Route::post('/login','Auth\LoginController@login')->middleware('check_user_is_active');

Route::get('/admin','Admin\AdminController@index')->name('admin_detail');

Route::get('/admin','AdminController@index')->name('admin_index') ->middleware('auth');


// User management
Route::group( [
    'prefix'=>'user',
    'middleware'=>['auth', 'check_user_is_active' ,'super_admin'],
    'namespace' => 'Admin' 

],

function(){ 

    Route::get('/index','UserController@index')->name('admin_user_index');
    Route::get('/view/{id}','UserController@view')->name('admin_user_view');
    Route::get('/create','UserController@create')->name('admin_user_create');
    Route::post('/store','UserController@store')->name('admin_user_store');
    Route::get('/edit/{id}','UserController@edit')->name('admin_user_edit');
    Route::post('/update','UserController@update')->name('admin_user_update');
    Route::post('/delete','UserController@delete')->name('admin_user_delete');
    Route::get('/test/{id}','UserController@test')->name('admin_user_test');
    
});
 
// User_role management
Route::group( [
    'prefix'=>'user_role',
    'middleware'=>['auth'],
    'namespace' => 'Admin' 

],

function(){ 

    Route::get('/index','UserRoleController@index')->name('admin_user_role_index');
    Route::get('/view/{id}','UserRoleController@view')->name('admin_user_role_view');
    Route::get('/create','UserRoleController@create')->name('admin_user_role_create');
    Route::post('/store','UserRoleController@store')->name('admin_user_role_store');
    Route::get('/edit','UserRoleController@edit')->name('admin_user_role_edit');
    Route::post('/update','UserRoleController@update')->name('admin_user_role_update');
    Route::post('/delete','UserRoleController@delete')->name('admin_user_role_delete');
    
});
 


Route::group( ['prefix'=>'admin',
'middleware'=>['auth'],
 'namespace' => 'Admin' 

], function(){

    Route::get('/','AdminController@index')->name('admin_index');

    // basic page  
    Route::get('/blade-index','AdminController@blade_index')->name('admin_blade-index');
    Route::get('/blade-create','AdminController@blade_create')->name('admin_blade_create');
    Route::get('/blade-view','AdminController@blade_view')->name('admin_blade_view');

});
 



// Route::group( [
//         'prefix'=>'admin',
//         'middleware'=>['auth'],
//         'namespace'=>'Admin'
//     ],function(){

//         Route::get('/','AdminController@index')->name('admin_index');
// });

// // user management
// Route::group( [
//     'prefix'=>'user',
//     'middleware'=>['auth'],
//     'namespace'=>'Admin'
// ],function(){
//     Route::get('/index','UserController@index')->name('admin_user_index');
//     Route::get('/view/{id}','UserController@view')->name('admin_user_view');
//     Route::get('/create','UserController@create')->name('admin_user_create');
//     Route::post('/store','UserController@store')->name('admin_user_store');
//     Route::get('/edit','UserController@edit')->name('admin_user_edit');
//     Route::post('/update','UserController@update')->name('admin_user_update');
//     Route::post('/delete','UserController@delete')->name('admin_user_delete');
// });



// Route::group( [
//         'prefix'=>'blank',
//         'middleware'=>['auth'],
//         'namespace'=>'Admin'
//     ],function(){

//         // basic_page
//         Route::get('/index','AdminController@blade_index')->name('admin_blade_index');
//         Route::get('/create','AdminController@blade_create')->name('admin_blade_create');
//         Route::get('/view','AdminController@blade_view')->name('admin_blade_view');
// });


 