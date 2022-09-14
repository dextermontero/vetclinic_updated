<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index')->with("title", "Vet Clinic and Petcare System");
})->name('index');

Route::get('/about', function () {
    return view('pages.about')->with("title", "About Us | Vet Clinic and Petcare System");
})->name('about');

Route::get('/services', function () {
    return view('pages.service')->with("title", "Services | Vet Clinic and Petcare System");
})->name('services');

Route::get('/blogs', function () {
    return view('pages.blog')->with("title", "Blogs | Vet Clinic and Petcare System");
})->name('blogs');
