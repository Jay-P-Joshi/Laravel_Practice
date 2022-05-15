<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TutorController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



// Route::get('/',[TutorController::class,'index']);

Route::get('/addCustomer',[CustomerController::class,'addCustomer']);
Route::get('/showMobile/{id}',[CustomerController::class,'showMobile']);
Route::get('/showCustomer/{id}',[MobileController::class,'showCustomer']);

Route::get('/index/{id}',[IndexController::class,'index']);


Route::get('/addAuthor',[AuthorController::class,'addAuthor']);
Route::get('/addPost/{id}',[PostController::class,'addPost']);

Route::get('/showPost/{id}',[PostController::class,'showPost']);
Route::get('/showAuthor/{id}',[AuthorController::class,'showAuthor']);


Route::get('/', [PageController::class, 'index']);