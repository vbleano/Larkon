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

    // <--------- GET --------->
    Route::get('/DiscForm', [DisclosureController::class, 'discPage'])->name('discForm');
    Route::get('/ViewAllDisclosures',[DisclosureController::class, 'viewAllDisclosures'])->name('ViewAllDisclosures');
    Route::get('/disclosure/{id}/destroy', [DisclosureController::class, 'DestroyDisclosure'])->name('DestroyDisclosure');
    Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');
    Route::get('/alerts', [DisclosureController::class, 'test'])->name('test');

    // <--------- POSTS --------->
    Route::post('/CreateDisclosure', [DisclosureController::class, 'validateDisc'])->name('CreateDisclosure');
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

});





