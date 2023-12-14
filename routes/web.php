<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TesteController;

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

Route::get('/',  [HomePageController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/login', function () {
    return 'login';
});
Route::prefix('app')->group(function () {
    Route::get('/clients', function () {
        return 'Clients';
    });
    Route::get('/suppliers', [SupplierController::class, 'index'])->name('app.suppliers');
    Route::get('/products', function () {
        return 'Products';
    });
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

//Rota de Fallback, ou seja de retorno para rederecionar melhor o usuario e nao ir para a pagina 404

Route::fallback(function () {
    echo 'A rota acessada nao existe <a href="./">Clique aqui </a> para ir para a página inicial.';
});
