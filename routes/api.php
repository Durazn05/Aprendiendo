<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\CursoController;

Route::get('/user', function (Request $request) {
   return $request->user();


});

Route::get('/cursos',[CursoController::class, 'index']);

