<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KindController;
Route::get('/',[KindController::class,'index'])->name('index');
Route::get('/create',[KindController::class,'create'])->name('create');
Route::post('/store',[KindController::class,'store'])->name('store');
Route::get('/show/{id}',[KindController::class,'show'])->name('show');
Route::get('/edit/{id}',[KindController::class,'edit'])->name('edit');
Route::put('/update/{id}',[KindController::class,'update'])->name('update');
Route::delete('/destroy/{id}',[KindController::class,'destroy'])->name('destroy');




