<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CGUController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonatorController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\StructureController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/request/create', [RequestController::class, 'create'])->name('request.create');
Route::post('/request/store', [RequestController::class, 'store'])->name('request.store');
Route::get('/request/auth', [RequestController::class, 'auth'])->name('request.auth');
Route::post('/request/show', [RequestController::class, 'show'])->name('request.show');
Route::get('/request/code', [RequestController::class, 'code'])->name('request.code');
Route::post('/request/end', [RequestController::class, 'end'])->name('request.end');

Route::get('/request/follow/auth', [DonatorController::class, 'follow_auth'])->name('follow.auth');
Route::post('/request/follow', [DonatorController::class, 'follow'])->name('follow');

Route::get('/gift', [GiftController::class, 'index'])->name('gift');
Route::get('/gift/show/{id}', [GiftController::class, 'show'])->name('gift.show');
Route::get('/gift/create/{id}/{amount}', [GiftController::class, 'create'])->name('gift.create');
Route::post('/gift/store', [GiftController::class, 'store'])->name('gift.store');

Route::get('/partner/create', [PartnerController::class, 'create'])->name('partner.create');
Route::post('/partner/store', [PartnerController::class, 'store'])->name('partner.store');

Route::get('/structure/create', [StructureController::class, 'create'])->name('structure.create');
Route::post('/structure/store', [StructureController::class, 'store'])->name('structure.store');

Route::get('/cgu', [CGUController::class, 'index'])->name('cgu');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [AdminController::class, 'req_list'])->middleware(['auth', 'verified'])->name('request.list');
Route::get('/dashboard/req/pending', [AdminController::class, 'pending_list'])->middleware(['auth', 'verified'])->name('pending.list');
Route::get('/dashboard/req/create', [AdminController::class, 'req_new'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/dashboard/req/validate', [AdminController::class, 'req_store'])->middleware(['auth', 'verified'])->name('req.store');
Route::get('/dashboard/pay', [AdminController::class, 'pay'])->middleware(['auth', 'verified'])->name('request.pay');
Route::post('/dashboard/pay/store', [AdminController::class, 'pay_store'])->middleware(['auth', 'verified'])->name('request.pay.store');
Route::get('/dashboard/pay/history', [AdminController::class, 'pay_history'])->middleware(['auth', 'verified'])->name('request.pay.history');
Route::get('/dashboard/setting', [AdminController::class, 'setting'])->middleware(['auth', 'verified'])->name('request.setting');

require __DIR__ . '/auth.php';
