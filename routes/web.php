<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
})->name('landing');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');


Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.store');

// Route for students job list
Route::get('/students/job-list', function () {
    return view('students.job-list');
})->name('students.job-list');




// Route::group(['middleware' => ['role:admin']], function () {
//     // Admin routes
//     Route::get('/admin/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('admin.dashboard');
// });

// Route::group(['middleware' => ['role:company']], function () {
//     // Company routes
//     Route::get('/company/dashboard', function () {
//         return view('company.dashboard');
//     })->name('company.dashboard');
// });

// Route::group(['middleware' => ['role:student']], function () {
//     // Student routes
//     Route::get('/student/dashboard', function () {
//         return view('student.dashboard');
//     })->name('student.dashboard');
// });
