<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;


Route::get('/', [Admincontroller::class, 'homepage']);



Route::get('/home',[AdminController::class, 'index'])->name('home');

Route::get('/post_page',[Admincontroller::class,'post_page']);

Route::post('/add_post',[Admincontroller::class,'add_post']);

Route::get('/show_post',[Admincontroller::class,'show_post']);

Route::get('/delete_post/{id}', [AdminController::class, 'delete_post']);

Route::get('/edit_page/{id}', [AdminController::class, 'edit_page']);

Route::post('/update_post/{id}',[AdminController::class, 'update_post']);

Route::get('/post_details/{id}',[AdminController::class, 'post_details']);

Route::get('/create_post',[AdminController::class, 'create_post']);


Route::get('/emp', function () {
    return view('admin.employee');
});

Route::post('/store', [EmployeeController::class, 'store'])->name('store');
Route::get('/getall', [EmployeeController::class, 'getall'])->name('getall');
Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit'])->name('edit');
Route::post('/employee/update', [EmployeeController::class, 'update'])->name('update');
Route::delete('/employee/delete', [EmployeeController::class, 'delete'])->name('delete');




