<?php  

use App\Http\Controllers\AboutController;  
use App\Http\Controllers\Activity\ActivityController;  
use App\Http\Controllers\ActivityDetailController;  
use App\Http\Controllers\HomeController;  
use App\Http\Controllers\OrganizationController;  
use App\Http\Controllers\OrganizationDetailController;  
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TesController;  
use Illuminate\Support\Facades\Route;  

// User  
Route::get('/', [HomeController::class, 'index'])->name('home');  

// Redirect /home to /  
Route::get('/home', function () {  
    return redirect()->route('home');  
})->name('home.redirect');  

Route::get('/about', [AboutController::class, 'index'])->name('about');  

// ** Tambahkan nama pada rute pencarian aktivitas **  
Route::get('/activity/search', [ActivityController::class, 'index'])->name('activity.search'); // Ubah di sini  

// ** Ubah nama rute untuk detail aktivitas **  
Route::get('/activity', [ActivityDetailController::class, 'index'])->name('activity.detail'); // Sesuaikan nama rute  

// ** Tambahkan nama pada rute pencarian organisasi **  
Route::get('/organization/search', [OrganizationController::class, 'index'])->name('organization.search'); // Ubah di sini  

// ** Ubah nama rute untuk detail organisasi **  
Route::get('/organization', [OrganizationDetailController::class, 'index'])->name('organization.detail'); // Sesuaikan nama rute 

Route::get('/status', [StatusController::class, 'index'])->name('status'); // Sesuaikan nama rute 

Route::get('/tes', [TesController::class, 'index'])->name('tes');  

// Auth  
Route::get('/dashboard', function () {  
    return view('dashboard');  
})->middleware(['auth', 'verified'])->name('dashboard');  

Route::middleware('auth')->group(function () {  
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');  
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');  
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');  
});  

require __DIR__.'/auth.php';