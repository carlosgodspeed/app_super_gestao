<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //instanciando objeto 
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'fornecedor carlos';
        $fornecedor->site = 'testefornecedor.com.br';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'fornecedorteste@teste.com';
        $fornecedor->save();


        // metodo create
        fornecedor::create([
            'nome' => 'Fornecedor klaus',
            'site' => 'Fornecedormikaelson.com.r',
            'uf' => 'RJ',
            'email' => 'klaus@mikaelson.com',
        ]);
        
    }
}
