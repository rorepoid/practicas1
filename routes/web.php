<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [QuotationController::class, 'index'])->middleware(['auth'])->name('home');
    Route::get('/reports', [ReportController::class, 'index'])->middleware(['auth'])->name('reports.index');
    Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');
    Route::resource('/companies', CompanyController::class);
    Route::resource('/quotations', QuotationController::class);
});

require __DIR__.'/auth.php';
