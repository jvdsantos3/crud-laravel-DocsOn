<?php

namespace App\Http\Controllers\Api;

use App\Models\Documento;
use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentoRequest;

class DocumentoController extends Controller
{
    public function store(Documento $documento, DocumentoRequest $request)
    {
        $documento = Documento::create([
            'titulo' => $request->titulo,
            'nome_arquivo' => $request->nome_arquivo,
            'tipo_id' => $request->tipo_id
        ]);

        return response()->json($documento, 201);
    }

    public function update(DocumentoRequest $request, Documento $documento)
    {
        $documento->fill($request->all());
        $documento->save();

        return $documento;
    }

    public function destroy(int $documento)
    {
        Documento::destroy($documento);

        return response()->noContent();
    }
}
