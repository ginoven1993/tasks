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


Route::match(['get', 'post'], '/collaborateurs', 'App\Http\Controllers\CollaborateursController@index');
Route::match(['get', 'post'], '/collaborateurs/show/{id}', 'App\Http\Controllers\CollaborateursController@show');
Route::match(['get', 'post'], '/collaborateurs/store', 'App\Http\Controllers\CollaborateursController@store')->name('collaborateurs.store');
Route::match(['get', 'post'], '/collaborateurs/edit/{id}', 'App\Http\Controllers\CollaborateursController@update');
Route::match(['get', 'post'], '/collaborateurs/delete/{id}', 'App\Http\Controllers\CollaborateursController@destroy');

Route::match(['get', 'post'], '/projets', 'App\Http\Controllers\ProjetController@index');
Route::match(['get', 'post'], '/projets/show/{id}', 'App\Http\Controllers\ProjetController@show');
Route::match(['get', 'post'], '/projets/store', 'App\Http\Controllers\ProjetController@store')->name('projets.store');
Route::match(['get', 'post'], '/projets/edit/{id}', 'App\Http\Controllers\ProjetController@update');
Route::match(['get', 'post'], '/projets/delete/{id}', 'App\Http\Controllers\ProjetController@destroy');

Route::match(['get', 'post'], '/taches', 'App\Http\Controllers\TachesController@index');
Route::match(['get', 'post'], '/taches/show/{id}', 'App\Http\Controllers\TachesController@show');
Route::match(['get', 'post'], '/taches/store', 'App\Http\Controllers\TachesController@store')->name('taches.store');
Route::match(['get', 'post'], '/taches/edit/{id}', 'App\Http\Controllers\TachesController@update')->name('taches.update');
Route::match(['get', 'post'], '/taches/delete/{id}', 'App\Http\Controllers\TachesController@destroy');

Route::match(['get', 'post'], '/timesheets', 'App\Http\Controllers\TimesheetController@index');
Route::match(['get', 'post'], '/timesheets/show/{id}', 'App\Http\Controllers\TimesheetController@show');
Route::match(['get', 'post'], '/timesheets/store', 'App\Http\Controllers\TimesheetController@store')->name('timesheets.store');
Route::match(['get', 'post'], '/timesheets/edit/{id}', 'App\Http\Controllers\TimesheetController@update')->name('timesheets.update');
Route::match(['get', 'post'], '/timesheets/delete/{id}', 'App\Http\Controllers\TimesheetController@destroy');



