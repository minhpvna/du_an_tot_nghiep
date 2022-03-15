<?php

use App\Http\Controllers\NotifyController;
use App\Http\Controllers\CategoryController;
use App\Models\Notify;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
Route::prefix('notify')->group(function(){
    Route::get('',[NotifyController::class,'index'])->name('notify.index');
    Route::get('/add',[NotifyController::class,'addForm'])->name('notify.add');
    Route::post('/add',[NotifyController::class,'saveAdd']);
    Route::get('/remove/{id}',[NotifyController::class,'remove'])->name('notify.remove');
    Route::get('/edit/{id}',[NotifyController::class,'editForm'])->name('notify.edit');
    Route::post('/edit/{id}',[NotifyController::class,'saveEdit']);
});

Route::prefix('category')->group(function () {
    Route::get('/',[CategoryController::class,'index'] )->name('category.index');
    Route::get('/add',[CategoryController::class,'addForm'] )->name('category.addForm');
    Route::post('/add',[CategoryController::class,'store'])->name('category.store');
    Route::get('/edit/{id}',[CategoryController::class,'editForm'])->name('category.edit');
    Route::post('/edit/{id}',[CategoryController::class,'saveEdit'])->name('category.update');
});


?>