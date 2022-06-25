<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'whoWeAre']);
Route::get('/give', [PageController::class, 'give']);
Route::get('/who-we-are', [PageController::class, 'whoWeAre']);
Route::get('/contact-us', [PageController::class, 'contactUs']);
