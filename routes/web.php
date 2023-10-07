<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();
Route::get('/',[HomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get("/project/{id}", [ProjectController::class, "show"])->name("show.project");
Route::post("/project/store", [ProjectController::class, "store"])->name("project.store");

Route::resource('task', TaskController::class);
Route::post("/project/{project}/task/create", [TaskController::class, "store"])->name("task.store");
Route::patch('/checked',[TaskController::class, 'check'])->name('check');
