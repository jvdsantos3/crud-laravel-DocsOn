<x-layout>
    <div class="d-flex justify-content-center">
        <h1>{{ $documento->titulo }}</h1>
    </div>
    
    <ul class="list-group">
        <div class="mt-3">
            <h5>Nome do arquivo</h5>
            <li class="list-group-item">{{ $documento->nome_arquivo }}</li>
        </div>
        <div class="mt-3">
            <h5>Tipo de documento</h5>
            <li class="list-group-item">{{ $tipoDocumento->find($documento->tipo_id)->nome_tipo }}</li>
        </div>
    </ul>

    <div>
        <a href="{{ route('documentos.edit', $documento->id) }}" class="btn btn-primary mt-3">
            Editar
        </a>

        <button class="btn btn-danger mt-3 ms-1" onclick='excluiDocumentoShow("{{ $documento->id }}")'>
            Excluir
        </button>

        <a href="{{ route('documentos.index') }}" class="btn btn-dark ms-1 mt-3">
            Voltar
        </a>
    </div>
</x-layout>