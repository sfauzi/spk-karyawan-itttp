<?php

use App\Http\Controllers\Admin\AlternativeController;
use App\Http\Controllers\Admin\CriteriaRatingController;
use App\Http\Controllers\Admin\CriteriaWeightController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DecisionController;
use App\Http\Controllers\Admin\NormalizationController;
use App\Http\Controllers\Admin\RankController;
use App\Http\Controllers\HomeController;
use App\Models\Alternative;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/admin', [DashboardController::class, 'index'])
//     ->name('dashboard');

Route::get('decision', [DecisionController::class, 'index']);

Route::get('normalization', [NormalizationController::class, 'index']);

Route::get('rank', [RankController::class, 'index']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');      

    Route::resources([
        'alternatives' => AlternativeController::class,
        'criteriaratings' => CriteriaRatingController::class,
        'criteriaweights' => CriteriaWeightController::class
        ]);
});

// Auth::routes();
Route::auth(['verify' => true]);

