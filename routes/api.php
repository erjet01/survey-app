<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;

Route::post('/surveys', [SurveyController::class, 'store']);