<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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
    return view('dashboard');
});

Route::get('/' , [CustomerController::class, 'get_all_customers']);

Route::get('/', [ProjectController::class, 'get_all_projects'])->middleware('auth');

Route::get('/delete/{id}', [ProjectController::class, 'delete_project']);

Route::get('/new-project', function(){
    return view('pages.new-project');
});

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/sign-out', [LoginController::class, 'signout']);

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/add-project',  [ProjectController::class, 'add_project']);
