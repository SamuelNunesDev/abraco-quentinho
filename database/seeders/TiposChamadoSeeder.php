<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposChamadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_chamado')->insert([
            ['descricao' => 'Doação => Entregar em um ponto de recolhimento'],
            ['descricao' => 'Doação Anonima => Entregar em um ponto de recolhimento'],
            ['descricao' => 'Doação => Aguardar pela equipe em casa'],
            ['descricao' => 'Doação Anonima => Aguardar pela equipe em casa'],
            ['descricao' => 'Fazer parte do time de voluntarios']
        ]);
    }
}
