<?php

namespace Database\Seeders;

use App\Models\TipoChamados;
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
        TipoChamados::firstOrCreate(['descricao' => 'Doação - Entregar em um ponto de recolhimento']);
        TipoChamados::firstOrCreate(['descricao' => 'Doação Anonima - Entregar em um ponto de recolhimento']);
        TipoChamados::firstOrCreate(['descricao' => 'Doação - Aguardar pela equipe em casa']);
        TipoChamados::firstOrCreate(['descricao' => 'Doação Anonima - Aguardar pela equipe em casa']);
        TipoChamados::firstOrCreate(['descricao' => 'Fazer parte do time de voluntarios']);
        TipoChamados::firstOrCreate(['descricao' => 'Ajuda - Financeira']);
        TipoChamados::firstOrCreate(['descricao' => 'Ajuda - Psicológica']);
        TipoChamados::firstOrCreate(['descricao' => 'Ajuda - Espiritual']);
        TipoChamados::firstOrCreate(['descricao' => 'Ajuda - Alimentos']);
        TipoChamados::firstOrCreate(['descricao' => 'Ajuda - Roupas']);
    }
}
