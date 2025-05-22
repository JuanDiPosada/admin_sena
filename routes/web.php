<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
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

//rutas para apprentices
route::get('apprentices',[ApprenticeController::class,'index'])->name('apprentice.index');
route::get('apprentice/create',[ApprenticeController::class,'create'])->name('apprentice.create');
route::post('apprentice/store',[ApprenticeController::class,'store'])->name('apprentice.store');


route::get('courses',[CourseController::class,'index'])->name('course.index');
route::get('course/create',[CourseController::class,'create'])->name('course.create');
route::post('course/store',[CourseController::class,'store'])->name('course.store');

route::get('teachers',[TeacherController::class,'index'])->name('teacher.index');
route::get('teacher/create',[TeacherController::class,'create'])->name('teacher.create');
route::post('teacher/store',[TeacherController::class,'store'])->name('teacher.store');
