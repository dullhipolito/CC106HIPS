<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});
