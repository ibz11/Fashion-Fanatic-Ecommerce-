<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('USER.Home');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//Home Controllers
route::get('/redirect',[HomeController::class,'redirect']);
route::get('/',[HomeController::class,'index']);


//Administrators Controller
route::get('/product',[AdminController::class,'product']);

route::post('/addproduct',[AdminController::class,'addproduct']);

route::get('/displayproduct',[AdminController::class,'displayproduct']);

route::get('/displayuser',[AdminController::class,'displayuser']);

//ORDERS
//Show orders
route::get('/showorders',[AdminController::class,'showorders']);
//Delete Order
route::get('/deleteorder/{id}',[AdminController::class,'deleteorder']);
//Update Order
route::post('/updateorders/{id}',[AdminController::class,'updateorders']);

//Update order view
//Update Order
route::get('/updatevieworder/{id}',[AdminController::class,'updatevieworder']);

//Search Product
route::get('/search',[HomeController::class,'search']);

//All products page
route::get('/productpg',[HomeController::class,'productpg']);

//CRUD
//Delete
route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);
route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);

//Update
route::get('/updateview/{id}',[AdminController::class,'updateview']);
route::post('/updateproduct/{id}',[AdminController::class,'updateproduct']);
route::get('/updateviewuser/{id}',[AdminController::class,'updateviewuser']);
route::post('/updateuser/{id}',[AdminController::class,'updateuser']);

//Create User
route::get('/newuser',[AdminController::class,'newuser']);
route::post('/createuser',[AdminController::class,'createuser']);

//Add cart
route::post('/addcart/{id}',[HomeController::class,'addcart']);

//show cart
route::get('/showcart',[HomeController::class,'showcart']);

//Delete Cart
route::get('/deletecart/{id}',[HomeController::class,'deletecart']);

//Orders
route::post('/order',[HomeController::class,'order']);
