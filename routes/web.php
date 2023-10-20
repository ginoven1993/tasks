<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/login', 'App\Http\Controllers\AuthentificationController@index')->name('index');

Route::match(['get', 'post'], '/create', 'App\Http\Controllers\AuthentificationController@create')->name('login');

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

Route::match(['get', 'post'], '/roles', 'App\Http\Controllers\RoleController@show');
Route::match(['get', 'post'], '/roles/permissions/{id}', 'App\Http\Controllers\RoleController@add_permission');
Route::match(['get', 'post'], '/roles/add', 'App\Http\Controllers\RoleController@index');
Route::match(['get', 'post'], '/roles/store', 'App\Http\Controllers\RoleController@store');
Route::match(['get', 'post'], '/roles/edit/{id}', 'App\Http\Controllers\RoleController@edit');
Route::match(['get', 'post'], '/roles/delete/{id}', 'App\Http\Controllers\RoleController@destroy');

Route::match(['get', 'post'], '/permissions', 'App\Http\Controllers\PermissionController@show');
Route::match(['get', 'post'], '/permissions/add', 'App\Http\Controllers\PermissionController@index');
Route::match(['get', 'post'], '/permissions/store', 'App\Http\Controllers\PermissionController@store');
Route::match(['get', 'post'], '/permissions/edit/{id}', 'App\Http\Controllers\PermissionController@edit');
Route::match(['get', 'post'], '/permissions/delete/{id}', 'App\Http\Controllers\PermissionController@destroy');

Route::post('/roles/{role}/permissions', 'App\Http\Controllers\RoleController@givePermission');
Route::delete('/roles/{role}/permissions/{permission}', 'App\Http\Controllers\RoleController@revokePermission');

Route::post('/permissions/{permission}/roles', 'App\Http\Controllers\PermissionController@assignRole');
Route::delete('/permissions/{permission}/roles/{role}', 'App\Http\Controllers\PermissionController@removeRole');


