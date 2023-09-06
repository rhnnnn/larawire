<?php

use App\Livewire\Posts\Create;
use Illuminate\Support\Facades\Route;
use App\Livewire\Posts\Index;

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

Route::name('posts.')->group(function(){
    Route::get('/', Index::class)->name('index');
    Route::get('create',Create::class)->name('create');
    
});

