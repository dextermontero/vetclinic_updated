<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDataController;
use App\Models\Blogs;
use App\Models\Services;
use App\Models\UserLogin;
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

Route::get('/login', function () {
    return view('pages.credentials.login')->with("title", "Sign In | Vet Clinic and Petcare System");
})->name('login')->middleware('guest');

Route::get('/register', function () {
    return view('pages.credentials.register')->with("title", "Sign Up | Vet Clinic and Petcare System");
})->name('register');

Route::get('/forgot', function () {
    return view('pages.credentials.forgot')->with("title", "Forgot Password | Vet Clinic and Petcare System");
})->name('forgot');

Route::get('/verify/{id}', function () {
    return view('pages.verify.verify')->with("title", "Account Verification | Vet Clinic and Petcare System");
})->name('verify');


Route::controller(ServicesController::class)->group(function() {
    Route::get('/services', 'showAll')->name('services');
    Route::get('services/{id}', 'getServiceId');
});

Route::controller(BlogsController::class)->group(function() {
    Route::get('/blogs', 'showAll')->name('blogs');
    Route::get('blogs/{id}', 'getBlogId');
});


// User Controller

Route::controller(UserController::class)->group(function() {
    Route::post('/login/process', 'login');
    Route::post('/registration', 'registration');
});

Route::controller(UserDataController::class)->group(function(){
    Route::post('/logout', 'logout');
});



// User Panel
Route::get('/dashboard', function () {
    return view('pages.userpanel.index')->with("title", "Dashboard | Vet Clinic and Petcare System");
})->name('userindex')->middleware('auth');
Route::get('/appointments', function () {
    return view('pages.userpanel.appointment')->with("title", "Dashboard | Vet Clinic and Petcare System");
})->name('userappointment')->middleware('auth');











Route::post('/login/process', [UserController::class, 'login']);
Route::post('/registration', [UserController::class, 'Registration']);
Route::post('/logout', [UserController::class, 'logout']);






// OLD ROUTING

/* Route::get('/services', function () {
    return view('pages.service')->with("title", "Services | Vet Clinic and Petcare System");
})->name('services'); 

Route::get('/services', [ServicesController::class, 'showAll']);

Route::get('/blogs', [BlogsController::class, 'showAll'])->name('blogs');
Route::get('/blogs/{id}', [BlogsController::class, 'getId']);

Route::get('/blogs', function () {
    return view('pages.blog')->with("title", "Blogs | Vet Clinic and Petcare System");
})->name('blogs');
 */