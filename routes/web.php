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
Route::view('/', 'principal')->name('principal');

//rutas para area
Route::get('areas',[AreaController::class, 'index'])->name('area.index');
Route::get('area/create', [AreaController::class, 'create'])->name('area.create');
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');
Route::get('area/{area}', [AreaController::class, 'show'])->name('area.show');
Route::put('area/{area}',[AreaController::class,'update'])->name('area.update');
Route::delete('area/{area}',[AreaController::class,'destroy'])->name('area.destroy');
Route::get('area/{area}/editar',[AreaController::class,'edit'])->name('area.edit');


//rutas para trainig center
Route::get('training_centers', [TrainingCenterController::class, 'index'])->name('training_center.index');
Route::get('training_center/create', [TrainingCenterController::class, 'create'])->name('training_center.create');
Route::post('training_center/store', [TrainingCenterController::class, 'store'])->name('training_center.store');
Route::get('training_center/{trainingCenter}', [TrainingCenterController::class, 'show'])->name('training_center.show');
Route::put('training_center/{trainingCenter}', [TrainingCenterController::class, 'update'])->name('training_center.update');
Route::get('training_center/{trainingCenter}/edit', [TrainingCenterController::class, 'edit'])->name('training_center.edit');
Route::delete('training_center/{trainingCenter}', [TrainingCenterController::class, 'destroy'])->name('training_center.destroy');



//rutas para computer
route::get('computers',[ComputerController::class,'index'])->name('computer.index');
route::get('computer/create',[ComputerController::class, 'create'])->name('computer.create');
route::post('computer/store',[ComputerController::class,'store'])->name('computer.store');
route::get('computer/{computer}',[ComputerController::class,'show'])->name(('computer.show'));
route::put('computer/{computer}',[ComputerController::class,'update'])->name('computer.update');
route::get('computer/{computer}/edit',[ComputerController::class,'edit'])->name('computer.edit');
route::delete('computer/{computer}',[ComputerController::class,'destroy'])->name('computer.destroy');


//rutas para teacher
route::get('teachers',[TeacherController::class,'index'])->name('teacher.index');
route::get('teacher/create',[TeacherController::class,'create'])->name('teacher.create');
route::post('teacher/store',[TeacherController::class,'store'])->name('teacher.store');
route::get('teacher/{teacher}',[TeacherController::class,'show'])->name('teacher.show');
route::put('teacher/{teacher}',[TeacherController::class,'update'])->name('teacher.update');
route::get('teacher/{teacher}/edit',[TeacherController::class,'edit'])->name('teacher.edit');
route::delete('teacher/{teacher}',[TeacherController::class,'destroy'])->name('teacher.destroy');


//rutas para apprentices
route::get('apprentices',[ApprenticeController::class,'index'])->name('apprentice.index');
route::get('apprentice/create',[ApprenticeController::class,'create'])->name('apprentice.create');
route::post('apprentice/store',[ApprenticeController::class,'store'])->name('apprentice.store');
route::get('apprentice/{apprentice}',[ApprenticeController::class,'show'])->name('apprentice.show');
route::put('apprentice/{apprentice}',[ApprenticeController::class,'update'])->name('apprentice.update');
route::get('apprentice/{apprentice}/edit',[ApprenticeController::class,'edit'])->name('apprentice.edit');
route::delete('apprentice/{apprentice}',[ApprenticeController::class,'destroy'])->name('apprentice.destroy');




route::get('courses',[CourseController::class,'index'])->name('course.index');
route::get('course/create',[CourseController::class,'create'])->name('course.create');
route::post('course/store',[CourseController::class,'store'])->name('course.store');
route::get('course/{course}',[CourseController::class,'show'])->name('course.show');
route::put('course/{course}',[CourseController::class,'update'])->name('course.update');
route::get('course/{course}/edit',[CourseController::class,'edit'])->name('course.edit');
route::delete('course/{course}',[CourseController::class,'destroy'])->name('course.destroy');

