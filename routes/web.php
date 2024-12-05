<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Activity\ActivityController;
use App\Http\Controllers\ActivityDetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//User
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/activity/search', [ActivityController::class, 'index'])->name('/activty/search');

Route::get('/activity', [ActivityDetailController::class, 'index'])->name('/activty');

Route::get('/organization/search', [OrganizationController::class, 'index'])->name('/organization/search');

//Auth
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('organization/dashboard', function () {
    return view('organization.dashboard-organization');
})->middleware(['auth', 'admin', 'verified'])->name('organization/dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
