<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/About-us', function () {
    return view('pages.about');
})->name('about');
Route::get('/barangays', function () {
    return view('pages.barangays');
})->name('barangays');
Route::get('/offices', function () {
    return view('pages.offices');
})->name('offices');
Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');

//registration
Route::get('/resident-registration', function () {
    return view('pages.registration');
})->name('registration');
Route::get('/registration-complete', function () {
    return view('pages.registration-complete');
})->name('registration-complete');

Route::get('/send-sms', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/residents', function () {
    return view('pages.residents');
})->middleware(['auth', 'verified'])->name('residents');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
