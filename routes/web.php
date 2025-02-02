<?php

use App\Http\Controllers\StudentController;
use App\Models\StudentModel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/home',[StudentController::class,'rukaiya']);
Route::delete('delete{id}', StudentController::class . '@destroy')->name('delete');
Route::get('create',[StudentController::class,'create'])->name('create');
Route::post('store',[StudentController::class,'store'])->name('store');
Route::get('edit/{student_id}', [StudentController::class, 'update'])->name('edit');
Route::post('edit-store', [StudentController::class, 'editStore'])->name('editStore');
