<?php

use http\Client\Response;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/resume', function () {
//    $path_to_file = 'storage/app/public/BlayneBRes.pdf';
    $filename = 'BlayneBRes.pdf';
    $path = storage_path($filename);

    return Response::download(file_get_contents($path), 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="'.$filename.'"'
    ]);

})->name('show.resume');
