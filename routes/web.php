<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DisclosureController;


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

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name("redirect.google");
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

require __DIR__ . '/auth.php';

Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
    return view('dashboards/index'); // or your homepage view
    })->name('index');

    Route::get('/DiscForm', [DisclosureController::class, 'discPage'])->name('discForm');
    Route::post('/CreateDisclosure', [DisclosureController::class, 'CreateDisclosure'])->name('CreateDisclosure');
    Route::get('/ViewAllDisclosures',[DisclosureController::class, 'viewAllDisclosures'])->name('ViewAllDisclosures');
    // Route::delete('/DeleteDisclosure/{id}/delete', [DisclosureController::class, 'DestroyDisclosure'])->name('DestroyDisclosure');
});

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');




