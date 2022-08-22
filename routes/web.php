<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
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

Route::get('/',[EventController::class,'index']);
Route::get('/add-event',[EventController::class,'addEvent']);
Route::post('/store',[EventController::class,'store']);
Route::get('/renginys/{event}',[EventController::class,'showEvent']);
Route::get('/renginys/delete/{event}',[EventController::class,'deleteEvent']);
Route::get('/renginys/update/{event}',[EventController::class,'updateEvent']);
Route::post('/update/{event}',[EventController::class,'storeUpdate']);
Route::get('/renginys/register/{event}',[EventController::class,'registerEvent']);
Route::post('/renginys/register/{event}',[EventController::class,'submitEventRegistration']);
Route::get('renginys/event-registrations/{event}',[EventController::class,'eventRegistrations']);
Route::get('/about',[EventController::class,'about']);
Route::get('/contacts',[EventController::class,'contacts'])->middleware('auth');
Route::get('renginys/event-approve-registration/{eventRegistration}',[EventController::class,'approveRegistration']);
Route::get('renginys/event-delete-registration/{eventRegistration}',[EventController::class,'deleteRegistration']);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
