<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // EE recomendavel definir o nome da tabela que o model foi criado, mas geral mente ele consegue identificar

    protected $table = 'produtos';
}
