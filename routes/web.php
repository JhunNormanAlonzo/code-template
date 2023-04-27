<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function(){
    $role = auth()->user()->getRoleNames()->first();
    if ($role == 'super-admin'){
        return redirect()->route('super-admin.index');
    }else if($role == 'teacher'){
        return redirect()->route('teacher.index');
    }else if($role == 'student'){

    }
});


Route::group(['middleware' => ['role:super-admin']], function (){
    Route::resource('/super-admin', SuperAdminController::class);
});


Route::group(['middleware' => ['role:teacher']], function (){
    Route::resource('/teacher', TeacherController::class);
});

Route::group(['middleware' => ['role:student']], function (){
    Route::resource('/student', StudentController::class);
});

