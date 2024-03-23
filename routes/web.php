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
    $data = [
        'HTML' => '90',
        'Laravel' => '85',
        'PHP' => '85',
        'MYSQL' => '80',
        'JavaScript' => '75',
        'JQuery' => '75',
        'CSS' => '70',
        'Vue.js' => '70',
        'Node.js' => '40',
        'ASP.NET' => '35',
        'xamarin' => '35',
        'WordPress' => '20',
    ];

    return view('welcome', compact('data'));
});
