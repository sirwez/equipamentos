<?php

use App\Http\Controllers\EquipamentosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Models\Equipamento;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    Route::get('/', [UsersController::class, 'index']);

    //rota login não utilizada pois usei a home para o login.
   // Route::get('/login', [UsersController::class, 'login']);
   
   // Route::post('store-form', [UsersController::class, 'store']);
    //Route::get('/users/painel/{id}', [UsersController::class, 'show']);
    //Route::get('/users/painel/editar', [UsersController::class, 'test']);
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        Route::resource('/equipamento', 'EquipamentosController')->except([
            'show', 'edit'
        ]);
        Route::resource('/equipamento', 'EquipamentosController')->except([
            'show', 'edit'
        ]);
    
        Route::get('/equipamento/delete/{equipamento}', function (App\Models\Equipamento $equipamento) {
            if(!session()->has('redirect_to'))
            {
                session(['redirect_to' => url()->previous()]);
            }
            return view('equipamentos.destroy', ['eqp' => $equipamento]);
        })->name('equipamento.delete');
         
        Route::get('/equipamento/edit/{equipamento}', function (App\Models\Equipamento $equipamento) {
            if(!session()->has('redirect_to'))
            {
                session(['redirect_to' => url()->previous()]);
            }
            return view('equipamentos.edit', ['eqp' => $equipamento]);
        })->name('equipamento.edit');
    });
