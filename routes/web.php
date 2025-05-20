<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;
//use App\Http\Controllers\PlantaoController;
//use App\Http\Controllers\EscalaContoller;
//use App\Http\Controllers\ControleHoraController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('teste', 'PRODUTOS.teste')
    ->middleware(['auth', 'verified'])
    ->name('teste');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::resource('medicos',MedicoController::class);
//Route::resource('plantoes',PlantaoController::class);
//Route::resource('escalas',EscalaController::class);
//Route::resource('controle_horas',ControleHorasController::class);

require __DIR__.'/auth.php';
