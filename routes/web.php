<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExpirementController;
use App\Models\Expirement;

Route::get('/', function () {
    // Check if user is authenticated first
    if (auth()->check()) {
        $expirements = auth()->user()->usersExpirements()->orderBy('created_at', 'desc')->get();
    } else {
        $expirements = collect(); // Empty collection for guests
    }

    return view('home', ['expirements' => $expirements]);
});

//handling user authentications
Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::post('/logout',[UserController::class,'logout']);

//managing expirement
Route::post('/add-expirement',[ExpirementController::class,'addExpirement']);
Route::get('/edit/{expirement}',[ExpirementController::class,'editExpirement']);
Route::put('/edit/{expirement}',[ExpirementController::class,'editExpirement']);
Route::delete('/delete/{expirement}',[ExpirementController::class,'deleteExpirement']);
