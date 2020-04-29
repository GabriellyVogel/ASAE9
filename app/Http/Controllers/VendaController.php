<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use App\Cliente;
use App\Produto;


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
        $id_cliente = $req->input('id_cliente');
        $descricao = $req->input('descricao');

        $venda = new Venda();
        $venda->valor = 0;
        $venda->id_cliente = $id_cliente;
        $venda->descricao = $descricao;

        if ($venda->save()){
            $msg = "Venda adicionada com sucesso!";
        }else{
            $msg = "Venda não foi cadatrado.";
        }

        return redirect()->route('itens', ['id' => $venda->id]);
        //return view("resultadoVenda", ["mensagem" => $msg]);
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

    function listar(){
        $v = Venda::all();

        return view('listaVendaGeral', ['vendas' => $v]);
    }

    function telaAddItem($id){
        $v = Venda::find($id);
        $p = Produto::all();

        if (session()->has("login")){
            return view('tela_cadastro_itens', ['venda' => $v, 'ps' => $p]);
        }
        return view("acesso_negado");
    }

    function adicionarItem(Request $req, $id){
        $id_produto = $req->input('id_produto');
        $quantidade = $req->input('quantidade');

        $produto = Produto::find($id_produto);
        $venda = Venda::find($id);
        $subtotal = $produto->preco * $quantidade;

        $col_pivot = [
            'quantidade' => $quantidade,
            'subtotal' => $subtotal
        ];

        $venda->produtos()->attach($produto->id, $col_pivot);
        $venda->valor += $subtotal;
        $venda->save();

        return redirect()->route('itens', ['id' => $venda->id]);
    }

    function excluirItem($id, $id_pivot){
        $venda = Venda::find($id);
        $subtotal = 0;

        foreach ($venda->produtos as $vp) {
            if ($vp->pivot->id == $id_pivot){
                $subtotal = $vp->pivot->subtotal;
                break;
            }
        }
        $venda->valor = $venda->valor - $subtotal;
        $venda->produtos()->wherePivot('id', '=', $id_pivot)->detach();
        $venda->save();

        return redirect()->route('itens', ['id' => $venda->id]);
    }

    function itensVenda($id){
        $venda = Venda::find($id);

        if (session()->has("login")){
            return view('listaItem', ['venda' => $venda]);
        }
        return view("acesso_negado");
    }
}