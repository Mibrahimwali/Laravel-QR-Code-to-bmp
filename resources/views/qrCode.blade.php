<!DOCTYPE html>
<html>
<head>
    <title></title>


</head>
<body>

<div class="visible-print text-center">
    <?php header('Content-type','image/png') ?>
	<h1>Laravel 5.7 - QR Code Generator Example</h1>

    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')
    ->size(100)->errorCorrection('H')
    ->generate('32121321321321*test')) !!} ">

    <img src="data:image/bmp;base64, {!! base64_encode($Qrcode)!!}">


    <img src="<?php echo asset('storage/33243243243221324798796sas74*test.svg'); ?>" >


    <?php

    $png_image = QrCode::format('svg')
    ->size(100)->errorCorrection('H')
    ->generate('32121321321321*test');

    $imgURL = '/var/www/html/laravel_qr/public/storage/33243243243221324798796sas74*test.svg';
    $imageContent = file_get_contents($imgURL);

    $image = new Imagick();

    $image->readImageBlob($png_image);
    // convert the output to JPEG
    $image->setImageFormat('bmp');
    $image->setImageCompressionQuality(90);

    $image->writeImage('/var/www/html/laravel_qr/public/storage/svg_image.bmp');
    ?>
    <img src="data:image/bmp;base64, {!! base64_encode($image)!!}" >
    <p>example by ItSolutionStuf.com.</p>
</div>

</body>
</html>
