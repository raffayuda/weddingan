<?php

use App\Http\Controllers\CateringController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DecorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\NormUserController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeddingController;
use App\Http\Controllers\WeddingDashboard;
use App\Http\Controllers\WeddingDashboardController;
use App\Models\Catering;
use App\Models\Decor;
use App\Models\Package;
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

Route::get('/', [WeddingController::class, 'index']);
Route::get('/about', [WeddingController::class, 'about']);
Route::get('/service', [WeddingController::class, 'services']);
Route::get('/menu', [WeddingController::class, 'menu']);
Route::get('/reservation', [WeddingController::class, 'reservation']);
Route::get('/team', [WeddingController::class, 'team']);
Route::get('/contact', [WeddingController::class, 'contact']);
Route::get('/testimonial', [WeddingController::class, 'testimonial']);
Route::get('/partner', [WeddingController::class, 'partner']);
Route::get('/partnerDecor', function() {
    return view('partnerDecor');
});
Route::get('/partnerEntertainment', function() {
    return view('partnerEntertainment');
});
Route::get('/partnerDocumentation', function() {
    return view('partnerDocumentation');
});
Route::get('/partnerCatering', function() {
    return view('partnerCatering');
});



Route::get('/allDekor', function() {
    $data4 = Decor::latest()->get();
    return view('allDekor', compact('data4'));
});
Route::get('/allCater', function() {
    $data5 = Catering::latest()->get();
    return view('allCater', compact('data5'));
});
Route::get('/allPackage', function() {
    $data6 = Package::latest()->get();
    return view('allPackage', compact('data6'));
});



Route::get('/aboutAdmin', [WeddingDashboardController::class, 'about'])->middleware('auth');
Route::get('/aboutEdit/{id}', [WeddingDashboardController::class, 'aboutEdit'])->middleware('auth');
Route::post('/aboutUpdate/{id}', [WeddingDashboardController::class, 'aboutUpdate'])->middleware('auth');

Route::get('/showDekor/{id}', [WeddingController::class, 'showDekor']);
Route::post('/dekorLike/{id}', [WeddingController::class, 'dekorLike']);
Route::post('/dekorDislike/{id}', [WeddingController::class, 'dekorDislike']);

Route::get('/showCater/{id}', [WeddingController::class, 'showCater']);
Route::post('/caterLike/{id}', [WeddingController::class, 'caterLike']);
Route::post('/caterDislike/{id}', [WeddingController::class, 'caterDislike']);

Route::get('/showPackage/{id}', [WeddingController::class, 'showPackage']);
Route::post('/paketLike/{id}', [WeddingController::class, 'paketLike']);
Route::post('/paketDislike/{id}', [WeddingController::class, 'paketDislike']);

Route::get('/login', [WeddingDashboardController::class, 'login'])->name('login');
Route::post('/loginProses', [WeddingDashboardController::class, 'loginProses']);
Route::get('/logout', [WeddingDashboardController::class, 'logout']);
Route::get('/register', [WeddingDashboardController::class, 'register']);
Route::post('/registerProses', [WeddingDashboardController::class, 'registerProses']);

Route::middleware(['auth', 'ceklevel:admin'])->group(function () {
    Route::get('/dashboard', [WeddingController::class, 'dashboard'])->middleware('auth');
    Route::get('/headerAdmin', [WeddingDashboardController::class, 'header'])->middleware('auth');
    Route::get('/headerEdit/{id}', [WeddingDashboardController::class, 'headerEdit'])->middleware('auth');
    Route::post('/headerUpdate/{id}', [WeddingDashboardController::class, 'headerUpdate']);

    Route::resource('employee', EmployeeController::class)->middleware('auth');
    Route::resource('serviceAdmin', ServiceController::class)->middleware('auth');
    Route::resource('decorAdmin', DecorController::class)->middleware('auth');
    Route::resource('cateringAdmin', CateringController::class)->middleware('auth');
    Route::resource('packageAdmin', PackageController::class)->middleware('auth');
    Route::resource('teamAdmin', TeamController::class)->middleware('auth');
    Route::resource('usersAdmin', UserController::class)->middleware('auth');
    Route::resource('users', NormUserController::class)->middleware('auth');
});

Route::middleware(['auth', 'ceklevel:user,admin'])->group(function () {
    Route::resource('contactAdmin', ContactController::class)->middleware('auth');
    Route::resource('reserAdmin', ReservationController::class)->middleware('auth');
    Route::get('/comment', [TestiController::class, 'comment']);
    Route::resource('testiAdmin', TestiController::class);
});