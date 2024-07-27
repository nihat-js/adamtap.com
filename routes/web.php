<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});


Route::group(["prefix" => "subjects"], function () {
  Route::get("/list", [SubjectController::class, "list"]);
  Route::get("", [SubjectController::class, "all"]);
  Route::get("{id}", [SubjectController::class, "details"]);
  Route::post("", [SubjectController::class, "create"]);

  Route::put("/{id}", [SubjectController::class, "update"]);
  Route::delete("/{id}", [SubjectController::class, "delete"]);
});

Route::group(["prefix" => "teachers"], function () {
  Route::get("/list", [TeacherController::class, "list"]);
  Route::get("/", [TeacherController::class, "all"]);
  Route::post("/", [TeacherController::class, "create"]);
  Route::put("/", [TeacherController::class, "update"]);
  Route::delete("/", [TeacherController::class, "destroy"]);
});
