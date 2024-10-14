<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // ini merujuk ke halaman welcome.blade.php di folder resource/views
});

Route::get('/', function () {
    return view('index'); // ini merujuk ke halaman welcome.blade.php  di folder resource/views
});

Route::get('/login', function () {
    return view('login'); // ini merujuk ke halaman welcome.blade.php  di folder resource/views
});
