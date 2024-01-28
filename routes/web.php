<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layouts.master');
}); 
Route::prefix('/subject')->group(function(){
    Route::get('/', [SubjectController::class,'search']);
    Route::get('/add', function () {
        return view('layouts.subject.subject-add');
    });
    Route::post('/create',[SubjectController::class,'create'])->name("subject.create");
    Route::get('/edit/{id}',[SubjectController::class,'find']);
    Route::get('/show/{id}',[SubjectController::class,'show']);
    Route::put('/update/{id}',[SubjectController::class,'update'])->name("subject.update");
     Route::put('/delete/{id}',[SubjectController::class,'delete'])->name("subject.delete");
}); 

Route::prefix('/student')->group(function(){
    Route::get('/', [StudentController::class,'search']);
    Route::get('/add', function () {
        return view('layouts.student.student-add');
    });
    Route::post('/create',[StudentController::class,'create'])->name("student.create");
    Route::get('/edit/{id}',[StudentController::class,'find']);
    Route::get('/show/{id}',[StudentController::class,'show']);
    Route::put('/update/{id}',[StudentController::class,'update'])->name("student.update");
     Route::put('/delete/{id}',[StudentController::class,'delete'])->name("student.delete");
}); 