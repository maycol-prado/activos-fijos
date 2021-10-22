<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ActivosfijoController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('activosfijos', ActivosfijoController::class)->names('admin.activosfijos');