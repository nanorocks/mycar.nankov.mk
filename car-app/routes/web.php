<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\{
    SSOController,
    ProfileController,
    HomeController,
    SocialiteController,
    PdfController,
    VehicleController,
    MaintenanceController,
    FleetManagementController,
    FuelTrackingController,
    ReportController,
    DriverController,
    UserManagementController,
    NotificationsController,
    PreferencesController,
    AlertsController
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

    // Vehicles
    Route::prefix('vehicles')->group(function () {
        Route::get('/', [VehicleController::class, 'index'])->name('vehicles.index');
        Route::get('/create', [VehicleController::class, 'create'])->name('vehicles.create');
        Route::get('/search', [VehicleController::class, 'search'])->name('vehicles.search');
    });

    // Maintenance
    Route::prefix('maintenance')->group(function () {
        Route::get('/scheduled', [MaintenanceController::class, 'scheduled'])->name('maintenance.scheduled');
        Route::get('/history', [MaintenanceController::class, 'history'])->name('maintenance.history');
        Route::get('/add', [MaintenanceController::class, 'add'])->name('maintenance.add');
    });

    // Fleet Management
    Route::prefix('fleet-management')->group(function () {
        Route::get('/overview', [FleetManagementController::class, 'overview'])->name('fleet.overview');
        Route::get('/assign-drivers', [FleetManagementController::class, 'assignDrivers'])->name('fleet.assignDrivers');
        Route::get('/utilization', [FleetManagementController::class, 'utilization'])->name('fleet.utilization');
    });

    // Fuel Tracking
    Route::prefix('fuel-tracking')->group(function () {
        Route::get('/log', [FuelTrackingController::class, 'log'])->name('fuel.log');
        Route::get('/history', [FuelTrackingController::class, 'history'])->name('fuel.history');
        Route::get('/efficiency-report', [FuelTrackingController::class, 'efficiencyReport'])->name('fuel.efficiencyReport');
    });

    // Reports
    Route::prefix('reports')->group(function () {
        Route::get('/maintenance', [ReportController::class, 'maintenance'])->name('reports.maintenance');
        Route::get('/fuel-efficiency', [ReportController::class, 'fuelEfficiency'])->name('reports.fuelEfficiency');
        Route::get('/utilization', [ReportController::class, 'utilization'])->name('reports.utilization');
    });

    // Drivers
    Route::prefix('drivers')->group(function () {
        Route::get('/', [DriverController::class, 'index'])->name('drivers.index');
        Route::get('/create', [DriverController::class, 'create'])->name('drivers.create');
        Route::get('/performance', [DriverController::class, 'performance'])->name('drivers.performance');
    });

    Route::get('/user-management', [UserManagementController::class, 'index'])->name('user-management.index');
    Route::get('/notifications', [NotificationsController::class, 'index'])->name('notifications.index');
    Route::get('/preferences', [PreferencesController::class, 'index'])->name('preferences.index');
    Route::get('/alerts', [AlertsController::class, 'index'])->name('alerts.index');

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

Route::get('/export-vehicle-pdf/{vehicleId}', [PdfController::class, 'export'])->name('export.vehicle.pdf');

require __DIR__ . '/auth.php';
