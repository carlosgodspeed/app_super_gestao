<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContato;

class SiteContatoSeeder extends Seeder
{
    public function run()
    {
      /*
      $qtde = SiteContato::count();
      if ($qtde == 0 ){
 
        $contato = new SiteContato();
        $contato->nome = 'Sistem SG';
        $contato->telefone = '(11) 9999-9999';
        $contato->email = 'sistema@sistema.com';
        $contato->motivo_contato = '1';
        $contato->mensagem = 'Seja Bem Vindo!';
        $contato->save();
      }
      */

      \App\Models\SiteContato::factory()->count(100)->create();
    }
}
