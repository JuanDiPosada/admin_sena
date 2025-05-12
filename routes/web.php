<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Models\TrainingCenter;
use Illuminate\Support\Facades\Route;


//ruta principal
Route::view('principal', 'principal');

//rutas para area
Route::get('areas',[AreaController::class, 'index'])->name('area.index');
Route::get('area/create', [AreaController::class, 'create'])->name('area.create');
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');

//rutas para trainig center
Route::get('training_centers',[TrainingCenterController::class,'index'])->name('trininig_center.index');
Route::get('training_center/create',[TrainingCenterController::class, 'create'])->name('training_center.create');
Route::post('training_center/store',[TrainingCenterController::class,'store'])->name('training_center.store');


//rutas para computer
route::get('computers',[ComputerController::class,'index'])->name('computer.index');
route::get('computer/create',[ComputerController::class, 'create'])->name('computer.create');
route::post('computer/store',[ComputerController::class,'store'])->name('computer.store');

