<?php

use controllers\PageController;

Route::get('', [PageController::class, 'index']);
Route::post('name', [PageController::class, 'name']);
Route::get('about', [PageController::class, 'about']);
