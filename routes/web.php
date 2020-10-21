<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfGenerateController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'fakePDF'], function () {
    Route::get('para', [PdfGenerateController::class, 'generateFakePara'])->name('generateFakePara');
    Route::get('table', [PdfGenerateController::class, 'generateFakeTable'])->name('generateFakeTable');
});