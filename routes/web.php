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

Route::get('/download', function () {
    $file = public_path().'/app.apk'; // указываем путь к файлу
    $headers = array('Content-Type: application/zip'); // указываем тип файла
    return response()->download($file, 'app.apk', $headers); // запускаем скачивание файла
});