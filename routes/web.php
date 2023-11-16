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
    $text = 'Hello World - from web.php';

    // M1
    // return view('home', ['text'=> $text]);

    // M2
    // $data = [
    //     'text' => $text,
    //     ];
    // return view('home', $data);

    // M3
    return view('home',compact('text'));
});

Route::get('/about', function () {
    return view('about');
});
