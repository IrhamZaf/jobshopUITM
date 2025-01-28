<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('landing');
});



Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');




Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Route for students job 
Route::get('/dashboard', function () {
    return view('students.dashboard');
})->name('students.dashboard');
Route::get('/students/job-list', [JobPostingController::class, 'studentIndex'])->name('students.job-list');
Route::get('/students/jobpreview/{jobPosting}', [JobPostingController::class, 'studentShow'])->name('students.jobpreview');

//company
Route::get('/candidate', function () {
    return view('company.candidate');
})->name('company.candidate');

Route::get('/company/joblist', [JobPostingController::class, 'companyJobList'])->name('company.joblist');

Route::get('/profile', function () {
    return view('profile.profile');
})->name('profile');



Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('editprofile');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('updateprofile');

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

// Add resource routes for job postings (for companies to manage their jobs)
Route::resource('job-postings', JobPostingController::class);

Route::middleware('auth')->group(function () {
    Route::post('/resume/upload', [ResumeController::class, 'store'])->name('resume.upload');
    Route::delete('/resume/{resume}', [ResumeController::class, 'destroy'])->name('resume.destroy');
    Route::post('/job/{jobPosting}/apply', [JobPostingController::class, 'apply'])->name('job.apply');
});

Route::get('/students/jobs/filter', [JobController::class, 'filter'])->name('jobs.filter');
