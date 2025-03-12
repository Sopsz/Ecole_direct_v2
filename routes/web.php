<?php

use Illuminate\Support\Facades\Route;

/*
if(env('APP_ENV') == 'local'){
    Auth:login(User:find(1));
}
*/
Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('users-display',\App\Livewire\UsersDisplay::class)->middleware(['auth']);
Route::get('user-display/{user_id}',\App\Livewire\UserDisplay::class)->middleware(['auth']);
