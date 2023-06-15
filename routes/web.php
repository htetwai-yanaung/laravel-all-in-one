<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('views/index', [
        'user' => 'htet'
    ]);
});
