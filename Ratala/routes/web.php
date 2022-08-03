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
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/studentregister', function () {
    return view('studentregister');
});
Route::get('/sign_up', function () {
    return view('sign_up');
});
Route::get('/createstudent', function () {
    return view('createstudent');
});
Route::get('/StudentDetail', function () {
    return view('StudentDetail');
});
Route::POST('/saveSignupForm',[StudentController::class,'saveSignup']);
Route::POST('/saveAddStudForm',[StudentController::class,'saveStudentAdd']);
Route::POST('/loginSubmits',[StudentController::class, 'submitLogin']);
Route::POST('/studentreg',[StudentController::class, 'saveStudRegister']);
Route::POST('/saveStudent',[StudentController::class, 'saveStudentDetail']);
Route::get('/studentdetail',[StudentController::class,'ListStudent']);
Route::get('/delete/{id}',[StudentController::class,'DeleteStud']);
Route::get('/update/{id}',[StudentController::class,'UpdateStudById']);



