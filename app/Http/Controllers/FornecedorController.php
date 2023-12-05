<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{

    public function index()
    {

        // $fornecedores = ['Fornecedor 1'];
        $fornecedores = [1,2,3,4,5,6,7,8,9];

        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
