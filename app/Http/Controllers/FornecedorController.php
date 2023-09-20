<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'fornecedor 1',
                'status' => 'N',
                'cpnj' => '0',
                'ddd' => '', //são paulo (SP)
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '86',
                'telefone' => '1010-0000',
            ],
            2 => [
                'nome' => 'fornecedor 3',
                'status' => 'S',
                'cnpj' => 111236798,
                'ddd' => '26',
                'telefone' => '1811-2200',
            ],
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
