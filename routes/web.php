<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\CustomerController;

// Public Routes
Route::get('/', [PublicController::class, 'home'])->name('public.home');
Route::get('/services', [PublicController::class, 'services'])->name('public.services');
Route::get('/laboratory', [PublicController::class, 'laboratory'])->name('public.laboratory');
Route::get('/contact', [PublicController::class, 'contact'])->name('public.contact');

// Authentication Scaffolding for now (mocked auth for testing routes properly before Fortify/Breeze)
Route::get('/login', function () {
    return 'Login Page (Placeholder)';
})->name('login');

// Employee / CRM Routes (Protected by Auth)
Route::middleware(['auth'])->prefix('employee/crm')->name('employee.crm.')->group(function () {
    Route::get('/leads', [LeadController::class, 'index'])->name('leads.index');
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
});
