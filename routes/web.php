<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobListingController;
use App\Http\Controllers\singleJobListingController;
use App\Http\Controllers\createListingController;
use Illuminate\Http\Request;
use App\Models\jobListing;


//home page-- show all listings
Route::get('/', [jobListingController::class, 'index']);

// //--show single listing
Route::get('/listing/{listing}', [singleJobListingController::class, 'show']);

// //-- show create listing
Route::get('/listings/create', [createListingController::class, 'create']);

// //--store listings
Route::post('/listings', [createListingController::class, 'store']);

// //--edit listings
// Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// // Update Listing
// Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// // Delete Listing
// Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// // Manage Listings
// Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');


// // Show Register/Create Form
// Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// // Create New User
// Route::post('/users', [UserController::class, 'store']);

// // Log User Out
// Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// // Show Login Form
// Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// // Log In User
// Route::post('/users/authenticate', [UserController::class, 'authenticate']);