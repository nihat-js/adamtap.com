<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});


Route::group(["prefix" => "subject"], function () {
  Route::get("/list", [SubjectController::class, "list"]);
  Route::get("/", [SubjectController::class, "all"]);
  Route::post("/", [SubjectController::class, "create"]);
  Route::put("/", [SubjectController::class, "update"]);
  Route::delete("/", [SubjectController::class, "destroy"]);
});

Route::group(["prefix" => "teacher"], function () {
  Route::get("/list", [TeacherController::class, "list"]);
  Route::get("/", [TeacherController::class, "all"]);
  Route::post("/", [TeacherController::class, "create"]);
  Route::put("/", [TeacherController::class, "update"]);
  Route::delete("/", [TeacherController::class, "destroy"]);
});
