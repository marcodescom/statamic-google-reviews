<?php

use Illuminate\Support\Facades\Route;
use MARCODES\StatamicGoogleReviews\Http\Controllers\GoogleReviewsUtilityController;

Route::get('/update', [GoogleReviewsUtilityController::class, 'update'])->name('update');
