<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return ['Laravel' => app()->version()];
// });

// Route::resource('companies', CompanyController::class);

Route::get('/',[CompanyController::class,'index'])->name('home');
Route::get('/companies/create',[CompanyController::class,'create'])->name('create');
Route::post('/companies/save',[CompanyController::class,'store'])->name('save');
Route::get('/companies/show/{company}',[CompanyController::class,'show'])->name('show');
Route::get('/companies/edit/{company}',[CompanyController::class,'edit'])->name('edit');
Route::put('/companies/update/{company}',[CompanyController::class,'update'])->name('update');
Route::delete('/companies/delete/{company}',[CompanyController::class,'destroy'])->name('delete');
