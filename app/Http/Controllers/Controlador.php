<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prova;
use Illuminate\Support\Facades\DB;

class Controlador extends Controller{
    public function index(){
        $dados = Prova::all();
        return view('exibirLocais', compact('dados'));
    }

    public function create(){
        return view('novoLocal');
    }

    public function store(Request $request){
        $dados = new Prova();
        $dados->local = $request->input('local');
        $dados->data = $request->input('data');
        $dados->save();
        return redirect ('/local')->with('sucess', 'Gravado com sucesso!');
    }

    public function edit(string $id){
        $dados = Prova::find($id);
        if(isset($dados)){
            return view ('editarLocal', compact('dados'));
        }
    }

    public function update(Request $request, string $id){
        $dados = Prova::find($id);
        if(isset($dados)){
            $dados->local = $request->input('local');
            $dados->data = $request->input('data');
            $dados->save();
            return redirect ('/local')->with('sucess', 'Atualizado com sucesso!');
        }
    }

    public function destroy(string $id){
        $dados = Prova::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect ('/local')->with('sucess', 'Deletado com sucesso!');
        }
    }
}
