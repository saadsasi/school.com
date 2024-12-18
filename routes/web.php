<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('admin/dashbaord', function () {
    return view('admin.dashbaord');
});


Route::get('admin/admin/list', function () {
    return view('admin.admin.list');
});