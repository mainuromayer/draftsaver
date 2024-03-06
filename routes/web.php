<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// connection check --------------
Route::get('/connection', function (){
    try {
        DB::connection()->getPdo();
        return "Connection Successfully";
    }catch (Exception $exception){
        dd($exception->getMessage());
    }
});


// redirect ----------
Route::get('/', function (){
    return redirect('/list');
});


// view --------
Route::match(['get', 'post'], '/form', [UserController::class, 'formPage']);
Route::get('/list', [UserController::class, 'listPage']);
Route::get('/edit', [UserController::class, 'editPage']);

// controller -----------
Route::get('/list-user', [UserController::class, 'ListUser']);
Route::post('/create-user', [UserController::class, 'Store']);
Route::match(['get', 'post'], '/user-profile', [UserController::class, 'userProfile']);

Route::post('/update-user', [UserController::class, 'updateProfile']);

