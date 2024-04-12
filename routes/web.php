<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello']);
//    ->middleware('auth');
Route::add(['GET', 'POST'], '/addEmp', [Controller\Admin::class, 'addEmp'])->middleware('auth' , 'role');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/employee', [Controller\Site::class, 'employee']);
Route::add('GET', '/subdivision', [Controller\Site::class, 'subdivision']);
Route::add('GET', '/addSub', [Controller\Site::class, 'addSub']);
Route::add('GET', '/sort', [Controller\Site::class, 'sort']);
Route::add('GET', '/nav', [Controller\Site::class, 'nav']);
