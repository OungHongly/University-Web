<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\ExamController;
use App\Http\Controllers\Backend\LMSController;
use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\ProfessorController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\Backend\SubjectController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AssignmentController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\ScheduleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*-------- admin --------*/
Route::prefix('')->group(function(){
    //Route::get('/',[DashboardController::class, 'index']);
    //Route::get('/admin',[AdminController::class, 'index']);
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

    Route::get('/course',[CourseController::class, 'index']);

    Route::get('/exam',[ExamController::class, 'index']);

    Route::get('/lms', [LMSController::class, 'index']);

    Route::get('/notice',[NoticeController::class, 'index']);

    Route::get('/professor',[ProfessorController::class, 'index']);

    Route::get('/student',[StudentController::class, 'index']);

    Route::get('/subject',[SubjectController::class, 'index']);
});

/*-------- auth --------*/
Route::prefix('/')->group(function(){
    Route::get('/', function (){
        return view('backend/auth.login');
    });
    Route::get('/register',[AuthController::class, 'register'])->name('register');

    Route::get('/login',[AuthController::class, 'index'])->name('login');

    Route::post('/login',[AuthController::class, 'login'])->name('login');
});


/*-------- student --------*/
Route::prefix('/student')->group(function(){
    Route::get('/dashboard',[DashboardController::class,'indexStudent']);

    Route::get('/exam',[ExamController::class, 'indexStudent']);

    Route::get('/assignment',[AssignmentController::class, 'indexStudent']);

    Route::get('/notice',[NoticeController::class,'indexStudent']);

    Route::get('/schedule',[ScheduleController::class,'indexStudent']);

    Route::get('/result',[ExamController::class,'result']);

    Route::get('/subject',[SubjectController::class,'indexStudent']);

    Route::get('/notice',[NoticeController::class,'indexStudent']);
});


/*-------- professor --------*/
Route::prefix('/teacher')->group(function(){
    Route::get('/dashboard',[DashboardController::class,'indexTeacher']);

    Route::get('/subjectProgress',[SubjectController::class, 'subjectProgress']);

    Route::get('/lecture',[SubjectController::class, 'lecture']);

    Route::get('/lms',[LMSController::class,'indexTeacher']);

    Route::get('/exam',[ExamController::class,'examProfessor']);

    Route::get('/notice',[NoticeController::class,'indexTeacher']);
});
