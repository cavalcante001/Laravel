<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SairController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

/**
 * CRUD
 * CREATE - CRIAR DADOS
 * READ - LER DADOS DO BANCO
 */

Route::get('/', [SiteController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/read', [PostController::class, 'read']);

Route::get('/posts/all', [PostController::class, 'all']);

Route::get('/posts/update', [PostController::class, 'update']);

Route::get('/posts/delete', [PostController::class, 'delete']);

Route::get('/sair', [SairController::class, 'sair']);

Route::get('/usuarios/{qnt}', [SiteController::class, 'users']);

// Route::get('/', function () {
//     return 'ainda estou no router';
//     return view('welcome');
// });
