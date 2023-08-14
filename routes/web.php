<?php

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

Route::get('/', function () {
    $report = new \App\Models\Report(new \App\Models\ExcelReport());
    $report = new \App\Models\Report(new \App\Models\PdfReport());
    return $report->report();
});
