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

use App\Http\Controllers\CategoriesController;

Auth::routes();

Route::group(['middleware' => ['web','auth']], function (){
    Route::get('/', function (){
       if (Auth::user()->admin == 0){
           return view('home');
       } else{
           $users['users'] = \App\User::all();
           return view('admin_home', $users);
       }
    });
});

// Event Routes
Route::get('event/', 'EventController@index')->name('event.show');
Route::get('event/edit/{id}', 'EventController@edit')->name('event.edit.id');

Route::post('event/update/{id}', 'EventController@update')->name('event.update.id');

// Categories Routes
Route::get('categories/{id?}/{name?}', 'CategoriesController@index')->name('categories.show');
Route::get('categories/create', 'CategoriesController@create')->name('categories.create');
Route::get('categories/edit/{id}', 'CategoriesController@edit')->name('categories.edit.id');

Route::post('categories/store', 'CategoriesController@store')->name('categories.store');
Route::post('categories/update/{id}','CategoriesController@update')->name('categories.update.id');
Route::post('categories/delete/{id}', 'CategoriesController@destroy')->name('categories.destroy.id');

// Contestants Routes
Route::get('contestants/', 'ContestantsController@index')->name('contestants.contestants');
Route::get('contestants/show/{id}', 'ContestantsController@index')->name('contestants.show');
Route::get('contestants/create', 'ContestantsController@create')->name('contestants.create');
Route::get('contestants/edit/{id}', 'ContestantsController@edit')->name('contestants.edit.id');

Route::post('contestants/store', 'ContestantsController@store')->name('contestants.store');
Route::post('contestants/update/{id}', 'ContestantsController@update')->name('contestants.update');
Route::post('contestants/delete/{id}','ContestantsController@destroy')->name('contestants.destroy.id');
