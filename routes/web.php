<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('manage',[StudentController::class,'get_all_student']);
Route::get('student_edit/{id}',[StudentController::class,'get_student_by_id']);
Route::put('update-student/{id}',[StudentController::class,'edit']);

route::get('student_add',function() {
    return  view('student_add');
});

Route::post('add_student',[StudentController::class,'add_student']);