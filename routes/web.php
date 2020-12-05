<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Cad_Temp;
use App\Models\cadastro_temp;
use App\Models\User;

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
    return view('cad_usuario');
})->middleware('auth');

Route::post('/Cadastro_usuario', function (Request $req) {
    $novoUsuario=new User();
    $novoUsuario->name=$req->name;
    $novoUsuario->password=$req->password;
    $success=$novoUsuario->CadastraUsuario();
    if($success!=true){echo $success;return view('cad_usuario'); }
    $Cad=new cadastro_temp();
    return view('portaria',['tabela'=>$Cad->all()]);
})->middleware('auth');

Route::post('/cad_temp',[Cad_Temp::class,'insereCadastro'])->middleware('auth');

Route::get('/logout',function(){Auth::logout();return view('auth/login');});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
