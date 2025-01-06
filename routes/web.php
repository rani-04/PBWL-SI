<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('index');
});

Route::get('about', function () {
    return view ('about');
});

Route::get('mahasiswa', function () {
    $npm = [123,124,125,126];
    $nama = ['Rani','Rana','Ranu','Rano'];
    $jumlah = count($npm);
    return view ('mahasiswa', compact ('npm','nama','jumlah'));
});

Route::get('profil', function () {
    return view ('profil');
});