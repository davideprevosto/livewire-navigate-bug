<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Test;
use App\Livewire\Test1;
use App\Livewire\Test2;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', Test::class);

Route::get('/test-1', Test1::class);

Route::get('/test-2', Test2::class);
