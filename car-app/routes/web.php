<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\{
    SSOController,
    ProfileController,
    HomeController,
    SocialiteController
};

// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::redirect('/', '/dashboard');

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::prefix('vehicles/{id}')->group(function () {
        Route::get('/', [HomeController::class, 'vehicles'])->name('vehicles.show');
        Route::get('/service-history-manager', [HomeController::class, 'serviceHistoryManager'])->name('service.history.manager');
        Route::get('/needed-service-manager', [HomeController::class, 'neededServiceManager'])->name('needed.service.manager');
        Route::get('/base-information-manager', [HomeController::class, 'baseInformationManager'])->name('base.information.manager');
    });

    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

// Guest routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [SSOController::class, 'login'])->name('login');
});

// SSO routes
Route::prefix('auth')->group(function () {
    Route::get('/callback', [SSOController::class, 'callback'])->name('sso.token');
    Route::get('/github/callback', [SocialiteController::class, 'handleGithubCallback'])->name('github.token');
    Route::get('/github', [SocialiteController::class, 'redirectToGitHub'])->name('github.redirect');
});

Route::get('/redirect', [SSOController::class, 'redirect'])->name('sso.redirect');
Route::get('/user/profile', [SSOController::class, 'profile'])->name('sso.profile');
Route::post('/logout', [SSOController::class, 'logout'])->name('logout');

// Utility routes
Route::get('/app/telescope/prune', fn() => Artisan::call('telescope:prune-entries'));

require __DIR__ . '/auth.php';