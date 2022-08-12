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

Route::get('/users', function () {
    $users = \DB::table("users")->get();
    $data["users"] = $users;
    return view('users/index', $data);
});

Route::get('/products', function(){
    $dataProducts['products'] = [
        "Playstation 5",
        "Medion computer",
        "samsung tv",
        "iPhone 10"
    ];
    return view('products/index', $dataProducts);
});