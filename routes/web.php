<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('index');
});

Route::get('about', function () {
    return view ('about');
});

Route::get('mahasiswa', function () {
    return view ('mahasiswa');
});

Route::get('profil', function () {
    return view ('profil');
});

Route::get('array', function () {
    // Infinite Loop
    $nilai_awal = 1;
    while ($nilai_awal <=100) {
        echo 'Hello Laravel' . $nilai_awal . 'x<br';
        $nilai_awal++;
    }
});