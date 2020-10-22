<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfGenerateController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('generatePDF', [PdfGenerateController::class, 'generatePDF'])->name('generatePDF');