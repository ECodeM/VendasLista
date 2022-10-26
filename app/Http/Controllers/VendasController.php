<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendasController extends Controller
{

    public function listarVendas()
    {
        $vendas = Venda::all();

        echo " ## Produtos ## ". "<br>";

        foreach($vendas as $venda){
            echo
            "Produto: " .$venda->produto . "<br>",
            "Quantidade: " .$venda->quantidade . "<br>",
            "Preço Unitário: R$ " .number_format($venda->preco_unitario) . "<br>",
            "Total: R$ " .number_format($venda->preco_unitario * $venda->quantidade, 2) . "<br>",
            "======================" . "<br>";
        }

    }

    public function verVendas($id)
    {
        $venda = Venda::find($id);

            echo
             "##".$venda->produto . "##" . "<br> <br>",
            "Quantidade: " .$venda->quantidade . "<br>",
            "Preço Unitário: R$ " .number_format($venda->preco_unitario, 2) . "<br>",
            "Total: R$ " .number_format($venda->preco_unitario * $venda->quantidade, 2) . "<br>";
    }

    public function cadastrarVenda($produto, $quantidade, $preco)
    {

        $venda = new Venda();
        $venda->produto = $produto;
        $venda->quantidade = $quantidade;
        $venda->preco_unitario = $preco;
        $venda->save();

        echo "Cadastrado com sucesso";

    }

    public function atualizarVenda($id, $produto, $quantidade, $preco)
    {

        $venda = Venda::find($id);

        $venda->produto = $produto;
        $venda->quantidade = $quantidade;
        $venda->preco_unitario = $preco;
        $venda->save();

        echo "Atualizado com sucesso";
    }

    public function excluirVenda($id)
    {


        $venda = Venda::find($id);

        $venda->delete();

        echo "Excluído com sucesso";
    }



}
