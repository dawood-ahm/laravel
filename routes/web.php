<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\members;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::view("list",'list');
route::view("datalist",'datalist');

route::get("list",[members::class ,'getdata']);