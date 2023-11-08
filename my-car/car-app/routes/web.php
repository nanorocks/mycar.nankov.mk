<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index'])
    ->name('home')
    ->middleware('auth.basic');

Route::get('/service-history-manager', [DashboardController::class, 'serviceHistoryManager'])
    ->name('service.history.manager')
    ->middleware('auth.basic');

Route::get('/needed-service-manager', [DashboardController::class, 'neededServiceManager'])
    ->name('needed.service.manager')
    ->middleware('auth.basic');

Route::get('/base-information-manager', [DashboardController::class, 'baseInformationManager'])
    ->name('base.information.manager')
    ->middleware('auth.basic');

Route::get('/logout', [DashboardController::class, 'logout'])
    ->name('auth.logout')
    ->middleware('auth.basic');