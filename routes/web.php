<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScraperController;
use App\Http\Controllers\JsonController;

Route::get('/', function () {
    return view('welcome');
});

//sql server deneme 
Route::get('sqlserv', [JsonController::class, 'mssql']);


Route::get("scr", [ScraperController::class, 'scraper'])->name('scrape');
Route::get("json", [JsonController::class, 'index'])->name('json');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

