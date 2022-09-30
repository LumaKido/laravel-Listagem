<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function store(Request $req){

        $p = new Pessoa;
        $p->nome = $req->input('nome');
        $p->idade = $req->input('idade');
        $p->escolaridade = $req->input('escolaridade');
        $p->comentario = $req->input('comentario');
        $p->save();

        return redirect()->back()->with('msg','Cadastro Realizado com Sucesso!');
    }

    public function listarpessoas(){
        $pessoas = Pessoa::All();
        return view('consultar',['pessoas'=>$pessoas]);
    }

    public function destroy ($id){
        Pessoa::findOrFail($id)->delete();
        return redirect('/consultar')->with('msg','Cadastro Deletado com Sucesso!');

    }
}
