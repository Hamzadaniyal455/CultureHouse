<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\DependentController;
use App\Models\Visitor;
use Illuminate\Support\Facades\Auth;

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
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');
Route::post('/', [HomeController::class, 'home'])->name('change-language');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/register', [VisitorController::class, 'saveVisitor'])->name('register.submit');
Route::get('/information', [HomeController::class, 'information'])->name('information');
Route::get('/information_reg', [HomeController::class, 'information_reg'])->name('information_reg');
Route::get('/dependents', [HomeController::class, 'dependents'])->name('dependents');
Route::get('/dependents_reg', [HomeController::class, 'dependents_reg'])->name('dependents_reg');
Route::post('/dependents', [HomeController::class, 'storeDependents'])->name('dependents.store');
Route::post('/dependents', [HomeController::class, 'checkDependents'])->name('dependents.submit');
Route::post('/dependents_add', [DependentController::class, 'addDependents'])->name('dependents.add');
Route::post('/dependents_reg', [HomeController::class, 'checkDependentsReg'])->name('dependents_reg.submit');
Route::get('/save_visit_info', [VisitorController::class, 'saveVisitInfo'])->name('visit_info.save');
Route::post('/save_visit_info_reg', [AuthController::class, 'saveVisitInfoRegistration'])->name('visit_info.reg');
// Route::post('/dependents', [HomeController::class, 'storeDependents'])->name('dependents.store');
Route::get('/login_successful', [HomeController::class, 'loginSuccessful'])->name('login_successful');
Route::get('/registration_successful', [HomeController::class, 'regSuccessful'])->name('reg_successful');
Route::post('/registration_check',[VisitorController::class, 'checkRegistered'])->name('register.check');

Route::post('/login_store', [HomeController::class, 'store'])->name('login_store');
