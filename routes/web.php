<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LanguageController;


Route::redirect('/', '/dashboard');
Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('admin.home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // for Company controller
    Route::resource('companies', CompanyController::class);


    // for Employee controller
    Route::resource('employees', EmployeeController::class);

    //Route::get('/employees/filter', [EmployeeController::class, 'filter'])->name('employees.filter');



    //Email Notification when assign a new employee
    Route::get('lang/{lang}',[LanguageController::class, 'switchLang'])->name('lang.switch');

});

require __DIR__.'/auth.php';
