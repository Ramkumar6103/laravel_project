<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class,'viewForm'])->name('home');
Route::post('/add-student',[StudentController::class,'addStudent']);