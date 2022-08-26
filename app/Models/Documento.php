<?php

namespace App\Models;

use App\Models\TipoDocumento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Documento extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'nome_arquivo', 'tipo_id'];

    public function tipo()
    {
        return $this->hasOne(TipoDocumento::class, 'tipo_id');
    }
}
