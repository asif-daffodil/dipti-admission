<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Models\Course;

Route::get('/', function () {
    $courses = Course::all();
    return view('welcome', compact('courses'));
});

Route::resource('courses', CourseController::class)->middleware(['auth', 'verified']);
Route::resource('/leads', LeadController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
