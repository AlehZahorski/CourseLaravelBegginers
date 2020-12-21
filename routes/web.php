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

Route::GET('/start', function () {
    return view('welcome');
});

Route::get('/users', 'UserController@list')->name('get.users');
Route::get('/users/{id}', 'ProfileController@show')->name('get.user.profile'); //->name('adres do blade(wodiku), jezeli ten istneje)

Route::get('users/{id}/address', 'user\ShowAddress')->where(['id' => '[0-9]+'])->name('get.users.address');

















// ======== welcome with blade =======//
Route::GET('/hello/{name}', 'welcomeController@helloAction');

Route::GET('/goodbye/{name}', 'welcomeController@goodbyeAction');
// ======== welcome with blade =======//


// ======== example methods =======//
$uri = '/example';
Route::GET( $uri, 'welcomeController@getAction');
Route::POST( $uri, 'welcomeController@postAction');
Route::PUT( $uri, 'welcomeController@putAction');
Route::DELETE( $uri, 'welcomeController@deleteAction');
Route::PATCH( $uri, 'welcomeController@patchAction');
Route::OPTIONS( $uri, 'welcomeController@optionsAction');
// ======== example methods =======//


Route::MATCH(['get', 'post'], 'match', function(){ //derektywa match daje mozliwosc obslugi przez kilka metod(put,post ect)
    return "jestem getem i postem jednoczesnie";
});


Route::any('/all', function(){  //wszystkie mozliwe metody(post get put delete wszystkie!!)
    return 'wszystkie mozliwe metody';
});

Route::view('/view/route', 'route.view'); // adres url - adres w folderach