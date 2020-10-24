<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastro_temp;

class Cad_Temp extends Controller
{
    //
    public function insereCadastro(Request $req){
        $cadastro=new cadastro_temp();
        

        $cadastro->Nome=$req->input('txtNome');
        $cadastro->Sobrenome=$req->input('txtSobrenome');
        $cadastro->Razao_visita=$req->input('slcRazao');
        $cadastro->CPF=$req->input('txtCPF');
        $cadastro->id_OperacionalFK=1;//$req->input('id_Operacional');
        $cadastro->id_MoradorFK=1;//$req->input('id_Morador');

        $cadastro->save();

        return view('portaria');
    }
}
