<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;

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


// Route::get('/customer',function(){
//     $customers = Customer::all();
//     // echo "<pre>";
//     // print_r($customers);

//         echo "<pre>";
//     print_r($customers->toArray());
// });
Route::get('/register',[CustomerController::class,'index']);
Route::post('/register',[CustomerController::class,'register']);

Route::get('/customer',[CustomerController::class,'store']);
//Route::post('/customer',[CustomerController::class,'register']);
Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::post('/customer',[CustomerController::class,'store']);
Route::get('/customer-view',[CustomerController::class,'view']);
Route::get('/customer/home',[CustomerController::class,'home'])->name('home');
Route::get('/customer-view/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');


Route::get('/',function(){
    return view('index');
});
