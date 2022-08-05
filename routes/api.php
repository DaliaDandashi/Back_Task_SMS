<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/admin', function (Request $request) {
    return $request->admin();
});

Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);

Route::post('/admin', [\App\Http\Controllers\AdminController::class, 'createAdmin']);
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'getAdmins']);
Route::get('/admin/{id}', [\App\Http\Controllers\AdminController::class, 'getAdmin']);
Route::post('/getadmin', [\App\Http\Controllers\AdminController::class, 'getAdminByUsername']);
Route::put('/admin/{id}', [\App\Http\Controllers\AdminController::class, 'updateAdmin']);
Route::delete('/admin/{id}', [\App\Http\Controllers\AdminController::class, 'deleteAdmin']);

Route::post('/student', [\App\Http\Controllers\StudentController::class, 'createStudent']);
Route::get('/student', [\App\Http\Controllers\StudentController::class, 'getStudents']);
Route::get('/student/{id}', [\App\Http\Controllers\StudentController::class, 'getStudent']);
Route::put('/student/{id}', [\App\Http\Controllers\StudentController::class, 'updateStudent']);
Route::delete('/student/{id}', [\App\Http\Controllers\StudentController::class, 'deleteStudent']);

Route::post('/homework', [\App\Http\Controllers\HomeworkController::class, 'createHomework']);
Route::get('/homework', [\App\Http\Controllers\HomeworkController::class, 'getHomeworks']);
Route::get('/homework/{id}', [\App\Http\Controllers\HomeworkController::class, 'getHomework']);
Route::put('/homework/{id}', [\App\Http\Controllers\HomeworkController::class, 'updateHomework']);
Route::delete('/homework/{id}', [\App\Http\Controllers\HomeworkController::class, 'deleteHomework']);
Route::get('/teacherhomework/{id}', [\App\Http\Controllers\HomeworkController::class, 'getHomeworkTeacher']);

