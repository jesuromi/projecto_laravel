<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(ClientController::class)->group(function(){
    Route::get('/clients','index')->name('clients.index');
    Route::get('/clients/create','create')->name('clients.create');
    Route::post('/clients/store','store')->name('clients.store');
});

