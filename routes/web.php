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



Auth::routes();

Route::group(['middleware' => ['web','auth']], function (){
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', function (){
       if (Auth::user()->admin == 0){
           return view('home');
       } else{
           $users['users'] = \App\User::all();
           return view('admin_home', $users);
       }
    });
});

Route::get('contestants/', 'ContestantsController@index')->name('contestants.contestants');
Route::get('contestants/show/{id}', 'ContestantsController@index')->name('contestants.show');
Route::get('contestants/create', 'ContestantsController@create')->name('contestants.create');
Route::get('contestants/edit/{id}', 'ContestantsController@edit')->name('contestants.edit.id');

Route::post('contestants/store', 'ContestantsController@store')->name('contestants.store');
Route::post('contestants/update/{id}', 'ContestantsController@update')->name('contestants.update');
Route::post('contestants/delete/{id}','ContestantsController@destroy')->name('contestants.destroy.id');

Route::get('configure/', 'Configure@index')->name('configure');