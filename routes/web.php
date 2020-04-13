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

    App\User::insert(); //создадим запись в бд

    $users = \App\User::all();

    foreach ($users as $user) {
        echo $user->created_at; //snake_case
        echo '<br>';
        echo $user->updatedAt; //camelCase
    }


});
