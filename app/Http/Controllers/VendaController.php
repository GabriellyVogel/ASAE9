<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use App\Cliente;


class VendaController extends Controller
{
     function telaVenda(){
        $cs = Cliente::all();

        if (session()->has("login")){
            return view("tela_cadastro_venda", ["cs" => $cs]);
        }

        return view("acesso_negado");
    }

    function adicionarVenda(Request $req){
        $valor = $req->input('valor');
        $id_cliente = $req->input('id_cliente');
        $descricao = $req->input('descricao');

        $venda = new Venda();
        $venda->valor = $valor;
        $venda->id_cliente = $id_cliente;
        $venda->descricao = $descricao;

        if ($venda->save()){
            $msg = "Venda adicionada com sucesso!";
        }else{
            $msg = "Venda não foi cadatrado.";
        }
        return view("resultadoVenda", ["mensagem" => $msg]);
    }
     function listaVenda($id){
    	$cs = Cliente::find($id);

        if (session()->has("login")){
            if($cs){
                return view("listaVenda", ["cs" => $cs]);
            }else{
                return redirect()->route('listar'); 
            }
        }
        return view("acesso_negado");
    }
}