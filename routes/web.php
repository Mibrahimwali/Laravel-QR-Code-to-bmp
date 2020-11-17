<?php

use Illuminate\Support\Facades\Route;


use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

Route::get('simple-qr-code', 'QrCodeController@index');

Route::get('qr-code-with-image', function () {
    $image = QrCode::format('png')->merge('https://www.w3adda.com/wp-content/uploads/2019/07/laravel.png', 0.3, true)
                   ->size(100)->errorCorrection('H')
                   ->generate('W3Adda Laravel Tutorial');
   return response($image)->header('Content-type','image/png');
   });
