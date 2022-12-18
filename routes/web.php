<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

Route::get('wilder/308776/people', [PeopleController::class, 'index']);
Route::get('wilder/308776/people/{people}', [PeopleController::class, 'show']);
Route::post('wilder/308776/people', [PeopleController::class, 'create']);
Route::put('wilder/308776/people/{people}', [PeopleController::class, 'update']);
Route::delete('wilder/308776/people/{people}', [PeopleController::class, 'delete']);