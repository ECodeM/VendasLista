<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{

   private $produtos = [
        [
            'nome' => 'Processador Intel I9',
            'categoria' => 'Informática',
            'preco' => 1899.90,
            'novo' => true,
            'promocao' => false
        ],
        [
            'nome' => 'Guitarra Fender Stratocaster',
            'categoria' => 'Instrumentos musicais',
            'preco' => 9899.90,
            'novo' => true,
            'promocao' => false
        ],
        [
            'nome' => 'TV Sony 59"',
            'categoria' => 'Eletrônicos',
            'preco' =>  2499.90,
            'novo' => true,
            'promocao' => true
        ],
        [
            'nome' => 'Soundbar LG XPTO',
            'categoria' => 'Eletrônicos',
            'preco' =>  899.90,
            'novo' => true,
            'promocao' => true
        ],
        [
            'nome' => 'Processador AMD Ryzen 3',
            'categoria' => 'Informática',
            'preco' => 399.90,
            'novo' => false,
            'promocao' => false
        ],
        [
            'nome' => 'iPhone 8 - 64GB',
            'categoria' => 'Celulares',
            'preco' =>  1899.90,
            'novo' => false,
            'promocao' => false
        ],
        [
            'nome' => 'Smartphone Samsung Galaxy S20',
            'categoria' => 'Celulares',
            'preco' =>  1299.90,
            'novo' => false,
            'promocao' => true
        ]
    ];


    public function index()
    {
        return view('loja', [
            'produtos' => $this->produtos
        ]);
    }

    public function indexNovos()
    {
        $produtos = array_filter($this->produtos, function($produto) {
            return $produto['novo'] == true;
        });

        return view('loja', [
            'produtos' => $produtos
        ]);
    }

    public function indexUsados()
    {
        $produtos = array_filter($this->produtos, function($produto) {
            return $produto['novo'] == false;
        });

        return view('loja', [
            'produtos' => $produtos
        ]);
    }
}
