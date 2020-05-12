<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    function telaCadastro(){
    	if (session()->has("login")){
            return view("tela_cadastro_cliente");
        }

        return view("acesso_negado");
    }

    function telaAteracao($id){
        $cliente = Cliente::find($id);
        if (session()->has("login")){
            return view("tela_alterar_cliente", [ "u" => $cliente ]);
        }
        return view("acesso_negado");
    }

    function adicionar(Request $req){
    	$nome = $req->input('nome');
    	$endereco = $req->input('endereco');
    	$cep = $req->input('cep');
        $estado = $req->input('estado');
        $cidade = $req->input('cidade');

    	$cliente = new Cliente();
    	$cliente->nome = $nome;
    	$cliente->endereco = $endereco;
    	$cliente->cep = $cep;
        $cliente->estado = $estado;
        $cliente->cidade = $cidade;
        

    	if ($cliente->save()){
    		$msg = "Cliente: ". $nome. " foi cadastrado(a) com sucesso!";
    	}else{
    		$msg = "Cliente não foi cadatrado.";
    	}
    	return view("resultado", ["mensagem" => $msg]);
    }
    function alterar(Request $req, $id){
        $nome = $req->input('nome');
        $endereco = $req->input('endereco');
        $cep = $req->input('cep');
        $estado = $req->input('estado');
        $cidade = $req->input('cidade');

        $cliente = Cliente::find($id);
        $cliente->nome = $nome;
        $cliente->endereco = $endereco;
        $cliente->cep = $cep;
        $cliente->estado = $estado;
        $cliente->cidade = $cidade;
        

        if ($cliente->save()){
            $msg = "Cliente: $nome foi Alterado(a) com sucesso!";
        }else{
            $msg = "Cliente não foi Alterado.";
        }
        return view("resultado", ["mensagem" => $msg]);
    }

    function excluir($id){
        $cliente = Cliente::find($id);

        foreach ($cliente->vendas as $v) {
            $v->delete();
        }


        if($cliente->delete()){
             $msg = "Cliente excluído com sucesso!";
        }else{
            $msg = "Cliente não foi excluído.";
        }
        return view("resultado", ["mensagem" => $msg]);
    }

    function listar(){
    	$clientes = Cliente::all();
        if (session()->has("login")){
            return view("lista", [ "us" => $clientes]);
        }
        return view("acesso_negado");
    }
}