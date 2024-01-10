<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;





Route::get('/', [GeneralController::class, 'home'])->name('home');
Route::get('career', [GeneralController::class, 'career'])->name('career');
Route::get('volunteer', [GeneralController::class, 'volunteer'])->name('volunteer');
Route::get('meet-our-team', [GeneralController::class, 'team'])->name('team');
Route::get('latest', [GeneralController::class, 'latest'])->name('latest');
Route::get('history', [GeneralController::class, 'history'])->name('history');
Route::get('vision_and_mission', [GeneralController::class, 'visionMission'])->name('vision_and_mission');
Route::get('contact-us', [GeneralController::class, 'contact'])->name('contact-us');