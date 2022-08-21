<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

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

//Index
Route::get("/", [HomeController::class, "index"]);

//Dashboard
Route::get("/admindashboard", [DashboardController::class, "dashboard"]);

//USERS
Route::get("/users", [UserController::class, "users"]);
Route::get("/users/delete/{id}", [UserController::class, "deleteUser"]);
Route::get("/admins", [UserController::class, "admins"]);
Route::get("/addadmin", [UserController::class, "addAdmin"]);
Route::post("/addadmin", [UserController::class, "storeAdmin"]);
Route::get("/admin/delete/{id}", [UserController::class, "deleteAdmin"]);
Route::get("/admin/update/{id}", [UserController::class, "updateAdmin"]);
Route::post("/admin/update/{id}", [UserController::class, "storeUpdatedAdmin"]);

//MENU
Route::get("/addmenu", [MenuController::class, "addMenu"]);
Route::post("/addmenu", [MenuController::class, "storeMenu"]);
Route::get("/menu", [MenuController::class, "menu"]);
Route::get("/menu/delete/{id}", [MenuController::class, "deleteMenu"]);
Route::get("/menu/update/{id}", [MenuController::class, "updateMenu"]);
Route::post("/menu/update/{id}", [MenuController::class, "storeUpdatedMenu"]);

//RESERVATIONS
Route::post("/makereservation", [ReservationController::class, "makeReservation"]);
Route::get("/reservations", [ReservationController::class, "reservations"]);
Route::get("/addreservation", [ReservationController::class, "addReservation"]);
Route::get("/reservations/delete/{id}", [ReservationController::class, "deleteReservation"]);
Route::get("/reservations/update/{id}", [ReservationController::class, "updateReservation"]);
Route::post("/reservations/update/{id}", [ReservationController::class, "storeUpdatedReservation"]);

//CHEFS
Route::get("/addchef", [ChefController::class, "addChef"]);
Route::post("/addchef", [ChefController::class, "storeChef"]);
Route::get("/chefs", [ChefController::class, "chefs"]);
Route::get("/chefs/delete/{id}", [ChefController::class, "deleteChef"]);
Route::get("/chefs/update/{id}", [ChefController::class, "updateChef"]);
Route::post("/chefs/update/{id}", [ChefController::class, "storeUpdatedChef"]);

//CART
Route::post("/addcart", [CartController::class, "addCart"]);
Route::get("/cart", [CartController::class, "viewCart"]);
Route::post("/updatecart", [CartController::class, "updateCart"]);
Route::post("/checkout", [CartController::class, "checkout"]);

//ORDER
Route::get("/order", [OrderController::class, "viewOrder"]);
Route::get("/orders", [OrderController::class, "orders"]);
Route::get("/orders/delete/{id}", [OrderController::class, "deleteOrder"]);
Route::get("/orders/update/{id}", [OrderController::class, "updateOrder"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});
