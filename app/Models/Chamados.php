<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamados extends Model
{
    use HasFactory;

    protected $table = 'chamados';
    protected $fillable = [
        'chamado_id',
        'nome',
        'tipo_chamado',
        'produto',
        'whatsapp',
        'cep',
        'rua',
        'bairro',
        'cidade',
        'numero',
        'complemento',
        'status',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'chamados_id';
}
