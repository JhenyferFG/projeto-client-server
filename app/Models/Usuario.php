<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Usuario extends Model
{
    protected $table='public.usuario';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nome',
        'cpfcnpj',
        'senha',
        'endereco',
        'telefone'
    ];
}
