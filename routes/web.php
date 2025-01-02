<?php  

use App\Http\Controllers\AboutController;  
use App\Http\Controllers\Activity\ActivityController as UserActivityController;  
use App\Http\Controllers\ActivityDetailController;  
use App\Http\Controllers\HomeController;  
use App\Http\Controllers\OrganizationController;  
use App\Http\Controllers\OrganizationDetailController;  
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatusBookmarkController;
use App\Http\Controllers\StatusMyActivityController;
use App\Http\Controllers\StatusTestimony;
use App\Http\Controllers\TesController;
use App\Http\Controllers\SuperAdmin\ActivityController as SuperAdminActivityController;
use Illuminate\Support\Facades\Route;  

Route::get('/', [HomeController::class, 'index'])->name('home');  

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');  

Route::get('/activity/search', [UserActivityController::class, 'index'])->name('activity.search');

Route::get('/activity', [ActivityDetailController::class, 'index'])->name('activity.detail'); 

Route::get('/organization/search', [OrganizationController::class, 'index'])->name('organization.search');

Route::get('/organization', [OrganizationDetailController::class, 'index'])->name('organization.detail');

Route::get('/status/my-activity', [StatusMyActivityController::class, 'index'])->name('status.my-activity');

Route::get('/status/testinomy', [StatusTestimony::class, 'index'])->name('status.testimony');

Route::get('/status/bookmark', [StatusBookmarkController::class, 'index'])->name('status.bookmark');

Route::get('/tes', [TesController::class, 'index'])->name('tes');


// Route::get('/superAdmin/index', [SuperAdminActivityController::class, 'tampil'])->name('index');
// Route::get('/superAdmin/forms', [SuperAdminActivityController::class, 'tambah'])->name('forms');
// Route::post('/superAdmin/submit', [SuperAdminActivityController::class, 'submit'])->name('submit');


// Auth

//Admin
Route::middleware(['auth', 'admin'])->group(function () {  

    Route::get('/dashboard/organization', function () {  
        return view('organization.dashboard-organization');
    })->middleware(['auth', 'verified'])->name('dashboard.organization');  

});

//User
Route::middleware(['auth', 'user'])->group(function () {  

    Route::get('/dashboard/user', function () {  
        return view('dashboard');
    })->middleware(['auth', 'verified', 'user'])->name('dashboard');  

});

Route::middleware('auth')->group(function () {  
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');  
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');  
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');  
});  

require __DIR__.'/auth.php';