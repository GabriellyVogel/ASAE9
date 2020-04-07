<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use App\Cliente;


class VendaController extends Controller
{
     function telaVenda(){
        return view("tela_cadastro_venda");
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
     function listaVenda(){
    	$venda = Venda::all();

    	return view("listaVenda", [ "vs" => $venda]);
    }
}