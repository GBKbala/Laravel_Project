<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudController;
use App\Http\controllers\ajaxController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('crud',crudController::class);
Route::resource('ajax',ajaxController::class);
