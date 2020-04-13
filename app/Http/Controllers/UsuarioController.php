<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller{
    function telaCadastro(){
        //Não protegi a tela de cadastro para usuário, pois se o usuário não estiver cadastrado e quiser realizar um cadastro ele não consegue.
        
    	return view("tela_cadastro_usuario");
    }

    function adicionar(Request $req){
    	$nome = $req->input('nome');
    	$login = $req->input('login');
    	$senha = $req->input('senha');

    	$usuario = new Usuario();
    	$usuario->nome = $nome;
    	$usuario->login = $login;
    	$usuario->senha = $senha;

    	if ($usuario->save()){
    		$msg = "Usuário $nome adicionado com sucesso.";
    	} else {
    		$msg = "Usuário não foi cadastrado.";
    	}

        return view("resultadoUsuario", [ "mensagem" => $msg]);
    }
}