<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
Route::get('/{any}', function () {
    return view('app'); // app.blade.php menampung root Vue
})->where('any', '.*');

