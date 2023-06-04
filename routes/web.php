<?php
use App\Http\Models;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HabitController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Collection;
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

Route::get('/', [Controller::class, 'index']);
Auth::routes();
Route::get('/habit', [HabitController::class, 'index'])->name('habit');

Route::get('/event', [EventController::class, 'index'])->name('event');

Route::get('/task', [TaskController::class, 'index'])->name('task');

Route::get('/users', [UserController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/habit/createform', [App\Http\Controllers\HabitController::class, 'createform'])->name('habit.createform');
Route::get('/habit/create', [App\Http\Controllers\HabitController::class, 'create'])->name('habit.create');
Route::delete('/habit/{id}', [App\Http\Controllers\HabitController::class, 'destroy'])->name('habit.destroy');

Route::get('/habit/updateform/{id}', [App\Http\Controllers\HabitController::class, 'updateform'])->name('habit.updateform');

Route::get('/habit/update/{id}', [App\Http\Controllers\HabitController::class, 'update'])->name('habit.update');


Route::get('/event/createform', [App\Http\Controllers\EventController::class, 'createform'])->name('event.createform');
Route::get('/event/create', [App\Http\Controllers\EventController::class, 'create'])->name('event.create');
Route::delete('/event/{id}', [App\Http\Controllers\EventController::class, 'destroy'])->name('event.destroy');
Route::get('/event/updateform/{id}', [App\Http\Controllers\EventController::class, 'updateform'])->name('event.updateform');
Route::get('/event/update/{id}', [App\Http\Controllers\EventController::class, 'update'])->name('event.update');

Route::get('/task/createform', [App\Http\Controllers\TaskController::class, 'createform'])->name('task.createform');
Route::get('/task/create', [App\Http\Controllers\TaskController::class, 'create'])->name('task.create');
