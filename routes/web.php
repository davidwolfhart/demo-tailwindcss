<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/exercises/3', function () {
    return view('exercises/3_instalasi_konfigurasi');
});

Route::get('/exercises/4', function () {
    return view('exercises/4_basic_utility_1');
});

Route::get('/exercises/5', function () {
    return view('exercises/5_basic_utility_2');
});

Route::get('/exercises/6', function () {
    return view('exercises/6_pseudo_class_dark_mode');
});

Route::get('/exercises/7', function () {
    return view('exercises/7_transform_transition_animation');
});

Route::get('/exercises/8', function () {
    return view('exercises/8_layouting');
});

Route::get('/exercises/9', function () {
    return view('exercises/9_responsive_design');
});

Route::get('/exercises/10', function () {
    return view('exercises/10_flexbox');
});

Route::get('/exercises/11', function () {
    return view('exercises/11_grid_layout');
});

Route::get('/exercises/12', function () {
    return view('exercises/12_function_directive');
});