<?php

use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route as ro;

ro::get('/', function () {
    return view('welcome');
});

ro::resource('loans', LoanController::class);
