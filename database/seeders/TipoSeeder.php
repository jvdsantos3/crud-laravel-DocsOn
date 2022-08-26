<?php

namespace Database\Seeders;

use App\Models\TipoDocumento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(TipoDocumento $tipo)
    {
        $tipo-> create([
            'nome_tipo' => 'Ata'
        ]);
        $tipo-> create([
            'nome_tipo' => 'Relatório'
        ]);
        $tipo-> create([
            'nome_tipo' => 'Contrato'
        ]);
        $tipo-> create([
            'nome_tipo' => 'Recibo'
        ]);
        $tipo-> create([
            'nome_tipo' => 'Formulario'
        ]);
        $tipo-> create([
            'nome_tipo' => 'Edital'
        ]);
    }
}
