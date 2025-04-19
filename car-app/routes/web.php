<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SSOController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

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

Route::middleware('auth')->group(function () {

    Route::get('/', [HomeController::class, 'index'])
        ->name('dashboard');

    Route::get('/vehicles/{id}', [HomeController::class, 'vehicles'])
    ->name('vehicles.show');

    Route::get('/service-history-manager', [HomeController::class, 'serviceHistoryManager'])
        ->name('service.history.manager');

    Route::get('/needed-service-manager', [HomeController::class, 'neededServiceManager'])
        ->name('needed.service.manager');

    Route::get('/base-information-manager', [HomeController::class, 'baseInformationManager'])
        ->name('base.information.manager');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/sso/login', [SSOController::class, 'login'])->name('login');

Route::get('/app/telescope/prune', function () {
    return Artisan::call('telescope:prune-entries');
});

Route::get('/redirect', [SSOController::class, 'redirect'])->name('sso.redirect');

Route::get('/auth/callback', [SSOController::class, 'callback'])->name('sso.token');

Route::get('/user/profile', [SSOController::class, 'profile'])->name('sso.profile');

Route::post('logout', [SSOController::class, 'logout'])
    ->name('logout');

require __DIR__ . '/auth.php';
