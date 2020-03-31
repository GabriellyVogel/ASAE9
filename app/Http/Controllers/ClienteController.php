<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    function telaCadastro(){
    	return view("tela_cadastro_cliente");
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
    		return redirect()->route('listar');
    	}else{
    		$msg = "Cliente não foi cadatrado.";
    	}
    	return view("resultado", ["mensagem" => $msg]);
    }

    function listar(){
    	$clientes = Cliente::all();

    	return view("lista", [ "us" => $clientes]);
    }
}
