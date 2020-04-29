<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\TipoProduto;

class ProdutoController extends Controller
{
    function telaCadastro(){
    	$tp = TipoProduto::all();
    	if (session()->has("login")){
            return view("tela_cadastro_produto", ["tp" => $tp]);
        }

        return view("acesso_negado");
    }
    function adicionar(Request $req){
    	$nome = $req->input('nome');
    	$preco = $req->input('preco');
    	$unidade = $req->input('unidade');
    	$id_tipo = $req->input('id_tipo');

    	$produtos = new Produto();
    	$produtos->nome = $nome;
    	$produtos->preco = $preco;
    	$produtos->unidade = $unidade;
    	$produtos->id_tipo = $id_tipo;

    	if ($produtos->save()){
    		$msg = "Produto: ". $nome. " foi cadastrado(a) com sucesso!";
    	}else{
    		$msg = "Produto não foi cadatrado.";
    	}
    	return view("resultadoProduto", ["mensagem" => $msg]);
    }
}