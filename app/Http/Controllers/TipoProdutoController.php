<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoProduto;

class TipoProdutoController extends Controller
{
    function telaCadastro(){
    	if (session()->has("login")){
            return view("tela_cadastro_tipo_produto");
        }

        return view("acesso_negado");
    }

    function adicionar(Request $req){
    	$nome = $req->input('nome');
    	$descricao = $req->input('descricao');

    	$tipo_produtos = new TipoProduto();
    	$tipo_produtos->nome = $nome;
    	$tipo_produtos->descricao = $descricao;
        

    	if ($tipo_produtos->save()){
    		$msg = "Tipo de Produto: ". $nome. " foi cadastrado(a) com sucesso!";
    	}else{
    		$msg = "Tipo de Produto não foi cadatrado.";
    	}
    	return view("resultadoTipo", ["mensagem" => $msg]);
	}
}
