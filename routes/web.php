<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PermissionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/login", [LoginController::class, "index"])->name("login");

Route::post("/login", [LoginController::class, "login"]);

Route::get("/", function () {
    return view("dashboard");
})->middleware("auth");

Route::get("/dashboard", function () {
    return view("dashboard");
})->middleware("auth");

Route::get("/users", [UserController::class, "index"])->middleware("role:Admin");

Route::post("/users/store", [UserController::class, "store"])->middleware("role:Admin");

Route::post("/user/{user}", [UserController::class, "update"])->middleware("role:Admin");

Route::delete("/user/{user}", [UserController::class, "destroy"])->middleware("role:Admin");

Route::get("/permissions", [PermissionController::class, "index"])->middleware("role:Admin");

Route::post("/permissions/store", [PermissionController::class, "store"])->middleware("role:Admin");

Route::delete("/permission/{permission}", [PermissionController::class, "destroy"])->middleware("role:Admin");

Route::get("/roles", [RoleController::class, "index"])->middleware("role:Admin");

Route::post("/role/store", [RoleController::class, "store"])->middleware("role:Admin");

Route::delete("/role/{role}", [RoleController::class, "destroy"])->middleware("role:Admin");

Route::post("/role/update", [RoleController::class, "update"])->middleware("role:Admin");

Route::get("/logout", [LoginController::class, "logout"])->name("logout")->middleware("auth");
