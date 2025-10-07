<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




require __DIR__.'/auth.php';
use App\Http\Controllers\Admin\Auth\LoginController as AdminLogin;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
    use App\Http\Controllers\Admin\AdminProfileController;
// Default User Auth Routes (Breeze gives this)
// Admin Auth Routes
Route::prefix('admin')->name('admin.')->group(function () {

    // ----- Guest routes -----
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminLogin::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminLogin::class, 'login'])->name('login.submit');
    });

    // ----- Authenticated admin routes -----
    Route::middleware('auth:admin')->group(function () {
        Route::post('/logout', [AdminLogin::class, 'logout'])->name('logout');

        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');

        // Profile management
        Route::prefix('profile')->name('profile.')->group(function () {
            Route::get('/', [AdminProfileController::class, 'edit'])->name('edit');      // GET /admin/profile
            Route::put('/', [AdminProfileController::class, 'update'])->name('update');  // PUT /admin/profile
            Route::delete('/', [AdminProfileController::class, 'destroy'])->name('destroy'); // DELETE /admin/profile
            Route::post('/delete-field', [AdminProfileController::class, 'deleteField'])->name('delete-field'); // POST /admin/profile/delete-field
            Route::delete('/admin/profile/image', [AdminProfileController::class, 'deleteImage'])->name('admin.profile.delete-image');
        });
    });

});



use App\Http\Controllers\User\DashboardController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});



//admin password reset option
// routes/web.php

// Admin Password Reset Routes...
Route::prefix('admin')->group(function () {
    Route::get('/password/reset', [App\Http\Controllers\Auth\AdminForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
    Route::post('/password/email', [App\Http\Controllers\Auth\AdminForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
    Route::get('/password/reset/{token}', [App\Http\Controllers\Auth\AdminResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
    Route::post('/password/reset', [App\Http\Controllers\Auth\AdminResetPasswordController::class, 'reset'])->name('admin.password.update');
});

//tender
use App\Http\Controllers\TenderController;

Route::resource('tenders', TenderController::class);
Route::resource('tenders', TenderController::class)->except(['show']);
Route::get('tenders', [TenderController::class, 'index'])->name('tenders.index');
Route::get('tenders/create', [TenderController::class, 'create'])->name('tenders.create');
Route::post('tenders', [TenderController::class, 'store'])->name('tenders.store');
Route::get('tenders/{tender}/edit', [TenderController::class, 'edit'])->name('tenders.edit');
Route::put('tenders/{tender}', [TenderController::class, 'update'])->name('tenders.update');
Route::delete('tenders/{tender}', [TenderController::class, 'destroy'])->name('tenders.destroy');

use App\Http\Controllers\MarketingPlanController;

Route::resource('marketing-plans', MarketingPlanController::class);
Route::post('marketing-plans/store-multiple', [MarketingPlanController::class, 'storeMultiple'])
    ->name('marketing-plans.store-multiple');

    use App\Http\Controllers\MarketingDmarController;

// List all Marketing DMARs
Route::get('/marketing-dmars', [MarketingDmarController::class, 'index'])->name('marketing-dmars.index');

// Show form to create a new DMAR
Route::get('/marketing-dmars/create', [MarketingDmarController::class, 'create'])->name('marketing-dmars.create');

// Store new DMAR
Route::post('/marketing-dmars', [MarketingDmarController::class, 'store'])->name('marketing-dmars.store');

// Show single DMAR
Route::get('/marketing-dmars/{marketing_dmar}', [MarketingDmarController::class, 'show'])->name('marketing-dmars.show');

// Show form to edit DMAR
Route::get('/marketing-dmars/{marketing_dmar}/edit', [MarketingDmarController::class, 'edit'])->name('marketing-dmars.edit');

// Update DMAR
Route::put('/marketing-dmars/{marketing_dmar}', [MarketingDmarController::class, 'update'])->name('marketing-dmars.update');
Route::patch('/marketing-dmars/{marketing_dmar}', [MarketingDmarController::class, 'update']); // optional

// Delete DMAR
Route::delete('/marketing-dmars/{marketing_dmar}', [MarketingDmarController::class, 'destroy'])->name('marketing-dmars.destroy');
