<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});


Route::get('/login', function(){
    return view('admin.login');
});

Route::post('/admin/login', [Adminauthcontroller::class, 'store'])->name('admin.login');