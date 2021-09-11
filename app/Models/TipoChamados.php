<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoChamados extends Model
{
    use HasFactory;

    protected $table = 'tipos_chamado';
    protected $fillable = ['descricao', 'created_at', 'updated_at'];
    protected $primaryKey = 'tipo_chamado_id';

    const DOACAO_ENTREGA = 1;
    const DOACAO_ENTREGA_ANONIMA = 2;
    const DOACAO_HOME = 3;
    const DOACAO_HOME_ANONIMA = 4;
    const SER_COLABORADOR = 5;
}
