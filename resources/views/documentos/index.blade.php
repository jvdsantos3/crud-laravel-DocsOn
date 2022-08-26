<x-layout>
    <a class="btn btn-dark" href="{{ route('documentos.create') }}">Novo Documento</a>

    <table class="table justify-center my-5">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Nome do arquivo</th>
            <th scope="col">Tipo de documento</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($documentos as $documento)
                <tr>
                    <th scope="row">{{ $documento->id }}</th>
                    <td>
                        <a href="{{ route('documentos.show', $documento->id) }}">{{ $documento->titulo }}</a>
                    </td>
                    <td>{{ $documento->nome_arquivo }}</td>
                    <td>{{ $tiposDocumento->find($documento->tipo_id)->nome_tipo }}</td>
                    <td>
                        <span class="d-flex">
                            <a href="{{ route('documentos.edit', $documento->id) }}" class="btn btn-primary btn-sm">
                                Editar
                            </a>

                            <a href="#" class="btn btn-danger btn-sm ms-1 botao-remover" onclick='excluiDocumentoIndex("{{ $documento->id }}")'>
                                Excluir
                            </a>
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>