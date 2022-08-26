<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function index()
    {
        $documentos = Documento::all();
        $tiposDocumento = TipoDocumento::all();

        $mensagemSucesso = session('mensagem.sucesso');

        return view('documentos.index')
            ->with('documentos', $documentos)
            ->with('tiposDocumento', $tiposDocumento)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function show(Documento $documento)
    {
        $tipoDocumento = TipoDocumento::find($documento->tipo_id);

        return view('documentos.show')
            ->with('documento', $documento)
            ->with('tipoDocumento', $tipoDocumento);
    }

    public function create()
    {
        $tiposDocumento = TipoDocumento::all();

        return view('documentos.create')->with('tiposDocumento', $tiposDocumento);
    }

    public function edit(Documento $documento)
    {
        $tiposDocumento = TipoDocumento::all();

        return view('documentos.edit')
            ->with('documento', $documento)
            ->with('tiposDocumento', $tiposDocumento);
    }
}
