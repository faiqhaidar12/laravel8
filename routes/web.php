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

Route::get('/about', function () {
    return view('about');
});

Route::get('/hello', function () {
    $data = ["message" => "hello, world"];
    return response()->json($data, 404);
});

Route::get('/debug', function () {
    $data = [
        "message" => "hello, world"
    ];

    ddd($data);
});

$tugas = [
    'pertama' => 'makan',
    'kedua' => 'minum',
    'ketiga' => 'tidur'
];

Route::get('/tugas', function () use ($tugas) {
    if (request()->search) {
        return $tugas[request()->search];
    }

    return $tugas;
});

Route::get('/tugas/{param}', function ($param) use ($tugas) {
    return $tugas[$param];
});

Route::post('/tugas', function () use ($tugas) {
    // return request()->all();
    $tugas[request()->label] = request()->tugas;
    return $tugas;
});

Route::patch('/tugas/{key}', function ($key) use ($tugas) {
    $tugas[$key] = request()->tugas;
    return $tugas;
});

Route::delete('/tugas/{key}', function ($key) use ($tugas) {
    unset($tugas[$key]);
    return $tugas;
});
