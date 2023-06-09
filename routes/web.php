<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    Admin\Dashboard,
    Admin\Professor\Professor
};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('/painel')->name('admin.')->group(function(){
    Route::get('/dashboard',Dashboard::class)->name('dashboard');
    Route::get('/professores',Professor::class)->name('professores');
});
Route::get('/', function () {
    return view('welcome');
});
