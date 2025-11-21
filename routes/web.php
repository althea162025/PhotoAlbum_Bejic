<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home'); 
})->name('home');

Route::get('/page 1', function () {
    return view('pages.page 1'); 
})->name('page 1');

Route::get('/page 2', function () {
    return view('pages.page 2'); 
})->name('page 2');

Route::get('/page 3', function () {
    return view('pages.page 3'); 
})->name('page 3');

Route::get('/page 4', function () {
    return view('pages.page 4'); 
})->name('page 4');

Route::get('/page 5', function () {
    return view('pages.page 5'); 
})->name('page 5');

