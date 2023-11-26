<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


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



Route::get('/',[ProfileController::class,'page'])->name('home');
Route::get('/about',[ProfileController::class,'about'])->name('about');
Route::get('/project',[ProfileController::class,'project'])->name('project');
Route::get('/contact',[ProfileController::class,'contact'])->name('contact');







