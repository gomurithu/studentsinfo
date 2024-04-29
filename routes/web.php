<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('students',[StudentController::class,'addstudent'])->name('add.student');
Route::post('store/students',[StudentController::class,'storestudent'])->name('store.student');
// Route::get('edit/student/{id}',[StudentController::class,'editstudent'])->name('edit.student');
// Route::post('update/student',[StudentController::class,'updatestudent'])->name('update.student');
// Route::get('delete/student/{id}',[StudentController::class,'deletestudent'])->name('delete.student');