<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EquepController;
use App\Http\Controllers\UserController;
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
});



Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.auth');
});

Route::middleware('auth')->group(function () {

    Route::view('suporet','components/phase/suporet');

    Route::resource('project', \App\Http\Controllers\ProjetController::class);
    Route::resource('user', \App\Http\Controllers\UserController::class);
    Route::resource('compt', \App\Http\Controllers\CompteController::class);

    Route::resource('phase', \App\Http\Controllers\PhaseController::class);
    Route::resource('employe', \App\Http\Controllers\EmployeController::class);

    Route::resource('equep', \App\Http\Controllers\EmployeController::class);
    Route::resource('tim', \App\Http\Controllers\TimController::class);
    Route::resource('profile', \App\Http\Controllers\ProfilController::class);

    Route::resource('organisme', \App\Http\Controllers\OrganismeController::class);
    Route::get('ShowProject/{id}', [\App\Http\Controllers\PlusController::class, 'ShowProject'])->name('ShowProject');
    Route::get('chafProject', [\App\Http\Controllers\PlusController::class, 'chafProject'])->name('chafProject');

    Route::get('phasess/{id}/{project_id}', [\App\Http\Controllers\PlusController::class, 'phasess'])->name('phasess');
    Route::get('phaseEquepShow/{id}', [\App\Http\Controllers\PlusController::class, 'ShowEquep'])->name('phaseEquepShow');
    Route::get('EquepDeleted/{phasetId}/{employeId}', [\App\Http\Controllers\PlusController::class, 'EquepDeleted'])->name('EquepDeleted');

    Route::get('showPhase/{phasetId}', [\App\Http\Controllers\PlusController::class, 'showPhase'])->name('showPhase');
    Route::get('insertPhase/{id}', [\App\Http\Controllers\PlusController::class, 'insertPhase'])->name('insertPhase');
    Route::get('editPhase/{id}', [\App\Http\Controllers\PlusController::class, 'editPhase'])->name('editPhase');
    Route::get('Logout', [\App\Http\Controllers\PlusController::class, 'Logout'])->name('Logout');
    Route::get('message', [\App\Http\Controllers\PlusController::class, 'message'])->name('message');

    Route::post('search', [\App\Http\Controllers\SearchController::class, 'search'])->name('search');
    Route::get('viorProjectSearch/{id}', [\App\Http\Controllers\SearchController::class, 'viorProjectSearch'])->name('viorProjectSearch');

    // searche via ijax axios
    Route::view('/liveSearch', 'liveSearch');
    Route::get('/admin', function () {
        return view('admin/index');
    });
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
