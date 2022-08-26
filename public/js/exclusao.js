const botaoRemover = $(".botao-remover");

botaoRemover.click(function(id) {
    console.log(id);
    const linha = $(this).parent().parent().parent();
    excluiLinha(linha)
});

function excluiLinha(linha) {
    linha.fadeOut(1000);
    setTimeout(function () {
        linha.remove();
    }, 1000);
}

function excluiDocumentoIndex(id) {
    $.ajax({
        url: `http://localhost:8000/api/documentos/${id}`,
        type: 'DELETE',
        success: excluiLinha
    });
}

function excluiDocumentoShow(id) {
    $.ajax({
        url: `http://localhost:8000/api/documentos/${id}`,
        type: 'DELETE',
        success: function() {
            location.href = "http://localhost:8000/documentos";
        }
    });
}
