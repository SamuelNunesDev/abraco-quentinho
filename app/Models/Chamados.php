<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamados extends Model
{
    use HasFactory;

    protected $table = 'chamados';
    protected $fillable = [
        'id',
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
        'created_at',
        'updated_at'
    ];
}
