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

Route::get('/', 'PagesController@index');


Route::group(['middleware' => ['authenticated']], function() {
    Route::get('users', 'UsersController@index');
    Route::get('profile', 'PagesController@profile');
    Route::get('settings', 'PagesController@settings');
});

Route::get('blade', 'PagesController@blade');

// Route::get('/users', function () {
//     $users = [
//         '0' => [
//             'first_name' => 'a',
//             'last_name' => 'b'
//         ],
//         '1' => [
//             'first_name' => 'c',
//             'last_name' => 'd'
//         ]
//     ];
//     return $users;
// });

Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('/profile/{username}', 'ProfileController@profile');
