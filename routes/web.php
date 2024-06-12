<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get("/",[ContactController::class,"viewList"]);

Route::get("/create",[ContactController::class,"create"]);
Route::post("/create",[ContactController::class,"save"]);

Route::get("/update/{id}",[ContactController::class,"update"]);
Route::put("/update/{id}",[ContactController::class,"saveUpdate"]);

Route::delete("/delete/{id}",[ContactController::class,"delete"]);
