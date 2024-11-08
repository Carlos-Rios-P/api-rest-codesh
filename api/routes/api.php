<?php

use App\Http\Controllers\FoodController;
use App\Models\Food;
use Illuminate\Support\Facades\Route;

Route::get('/teste', [FoodController::class, 'index']);
