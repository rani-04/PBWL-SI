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