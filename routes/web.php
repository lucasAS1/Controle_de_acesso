<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Cad_Temp;
use App\Models\cadastro_temp;

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

Route::get('/', function () {
    $Cad=new cadastro_temp();
    return view('portaria',['tabela'=>$Cad->all()]);
})->middleware('auth');

Route::get('/Cadastro', function () {
    return view('temp_cad');
})->middleware('auth');

Route::get('/Cadastro_usuario', function () {
    return view('auth/register');
})->middleware('auth');

Route::post('/cad_temp',[Cad_Temp::class,'insereCadastro']);

Route::get('/logout',function(){Auth::logout();return view('auth/login');});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
