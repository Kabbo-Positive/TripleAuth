<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirects',[HomeCOntroller::class,'index']);
Route::post('/add-subadmin',[HomeCOntroller::class,'addsubadmin']);

Route::middleware(['auth:sanctum', 'verified'])
->get('/dashboard',[HomeCOntroller::class,'index'])->name('dashboard');
