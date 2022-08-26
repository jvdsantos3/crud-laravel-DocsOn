<x-layout>
    <div class="d-flex justify-content-center align-items-center">
        <form style="width: 70%;">
            <fieldset>
                <legend class="d-flex justify-content-center">Cadastro</legend>

                <div class="d-flex justify-content-center">
                    <p id="erro">Dados incompletos ou arquivo já existente.</p>
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>
                <div class="mb-3">
                    <label for="nome_arquivo" class="form-label">Nome do arquivo:</label>
                    <input type="text" class="form-control" id="nome_arquivo" name="nome_arquivo" required>
                </div>
                <div class="mb-3">
                    <label for="nome_tipo">Tipo do arquivo:</label>
                    <select id="nome_tipo" name="nome_tipo" class="form-select mt-2" required>
                        @foreach($tiposDocumento as $tipoDocumento)
                            <option class="tipos" value="{{ $tipoDocumento->id }}">{{ $tipoDocumento->nome_tipo }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <button id="btn-cadastra" class="btn btn-primary mt-3 col-3 me-2">Salvar</button>
                    <a href="{{ route('documentos.index') }}" class="btn btn-dark mt-3 col-3">Voltar</a>
                </div>
            </fieldset>
        </form>
    </div>
</x-layout>