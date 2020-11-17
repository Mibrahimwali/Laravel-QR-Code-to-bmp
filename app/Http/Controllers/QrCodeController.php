<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SimpleSoftwareIO\QrCode\Facades\QrCode;


class QrCodeController extends Controller
{
    function index(){


        $image = QrCode::format('png')->merge('https://www.w3adda.com/wp-content/uploads/2019/07/laravel.png', 0.3, true)
            ->size(100)->errorCorrection('H')
            ->generate('W3Adda Laravel Tutorial');
            //print_r($qrcode);


            return view('qrCode', ['Qrcode'=>$image]);
    }
}
