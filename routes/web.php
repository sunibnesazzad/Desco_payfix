<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

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
/*
Route::get('/', function () {
    return view('welcome');
}); */

//Route::get('/home', 'App\Http\Controllers\SessionController@create')->name('login');

Route::get('/home', [SessionController::class, 'create'])->name('login');
Route::get('/register',[SessionController::class, 'store']);

//Route::get('/print_detail/{user_name}',[SessionController::class, 'printdetail'])->name('print_pdf');
Route::get('/print_detail/{user_name}',[SessionController::class, 'convert_detail_data_to_html'])->name('print_pdf');


