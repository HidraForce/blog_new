<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = 
        [
            0=>[
                'nome'=>'fornecedor 1',
                'status'=>'n',
                'cnpj'=>'00.000.000/000.00'
            ],
            1=>[
                'nome'=>'fornecedor 1',
                'status'=>'s',
                'cnpj'=> null 
            ]
        
        ];
        return view("app.fornecedor.index",compact('fornecedores'));
    }
}
