<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WeatherController::class, 'index'])->name('home');
Route::post('/weather', [WeatherController::class, 'getWeather'])->name('weather');
Route::get('/forecast/{city}', [WeatherController::class, 'getForecast'])->name('forecast');