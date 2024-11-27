<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VisitorController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/information', [HomeController::class, 'information'])->name('information');
Route::get('/information_reg', [HomeController::class, 'information_reg'])->name('information_reg');
Route::get('/dependents', [HomeController::class, 'dependents'])->name('dependents');
Route::get('/dependents_reg', [HomeController::class, 'dependents_reg'])->name('dependents_reg');
Route::post('/dependents', [HomeController::class, 'storeDependents'])->name('dependents.store');
Route::post('/dependents', [HomeController::class, 'checkDependents'])->name('dependents.submit');
Route::post('/dependents_reg', [HomeController::class, 'checkDependentsReg'])->name('dependents_reg.submit');
Route::get('/save_visit_info', [VisitorController::class, 'saveVisitInfo'])->name('visit_info.save');
// Route::post('/dependents', [HomeController::class, 'storeDependents'])->name('dependents.store');
Route::get('/login_successful', [HomeController::class, 'loginSuccessful'])->name('login_successful');
Route::get('/registration_successful', [HomeController::class, 'regSuccessful'])->name('reg_successful');

Route::post('/login_store', [HomeController::class, 'store'])->name('login_store');
