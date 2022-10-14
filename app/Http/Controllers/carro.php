<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
use Illuminate\Support\Facades\Redirect;

class carrocontroller extends Controller
{
    public function FormularioCadastroC(){
        return view('cadastrarCarro');
    }

    public function EditarC(){
        return view('editarCarro');

    }

    public function SalvarBancoC(Request $request){
        $dadosCaminhao = $request->validate([
            'modelo'=>'string|required',
            'marca'=>'string|required',
            'ano'=>'string|required',
            'cor'=>'string|required',
            'valor'=>'string|nullable',
        ]);

        Carro::create($dadosCaminhao);
        return Redirect::route('home');

    }
};