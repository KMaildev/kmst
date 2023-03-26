<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::get('labour_activities', [ActivitiesController::class, 'labourActivities'])->name('labour_activities');
Route::get('event_activities', [ActivitiesController::class, 'eventActivities'])->name('event_activities');
Route::get('gallery_activities', [ActivitiesController::class, 'galleryActivities'])->name('gallery_activities');
Route::resource('client', ClientController::class);
Route::resource('job', JobController::class);
Route::resource('cv', CvController::class);
Route::resource('about', AboutController::class);
