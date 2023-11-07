<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        /*
        if(!(empty($request->all()))) {
            $contato = new SiteContato();
            $contato->nome = $request->input('nome');
            $contato->telefone = $request->input('telefone');
            $contato->email = $request->input('email');
            $contato->motivo_contato = $request->input('motivo_contato');
            $contato->mensagem = $request->input('mensagem');

            $contato->save();
        }
        */

        /*
        if(!(empty($request->all()))) {
            $contato = new SiteContato();
            $contato->create($request->all());
        }
        */

        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }

    public function salvar(Request $request) {

        $request->validade([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required'
        ]);
        //SiteContato::create($request->all());
    }
}
