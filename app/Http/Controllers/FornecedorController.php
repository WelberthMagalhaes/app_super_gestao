<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{

    public function index()
    {

        $fornecedores = [
            0 => [
                'nome'   => 'Fornecedor 1',
                'status' => 'N',
                'CNPJ'   => '00.000.000/0001-00',
                'ddd'    => '11', //São Paulo (SP)
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'N',
                'CNPJ'   => '00.000.000/0001-00',
                'ddd'    => '85', //Fortaleza (CE)
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'N',
                'CNPJ'   => '00.000.000/0001-00',
                'ddd'    => '32', //Juiz de Fora (MG)
                'telefone' => '0000-0000'
            ],
            3 => [
                'nome' => 'Fornecedor 4',
                'status' => 'N',
                'CNPJ'   => '00.000.000/0001-00',
                'ddd'    => '',
                'telefone' => '0000-0000'
            ]
        ];

        $fornecedores = [];

        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
