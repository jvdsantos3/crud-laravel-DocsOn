function alteraDocumento(id) {
    event.preventDefault();

    const documento = criaDados();

    $.ajax({
        url: `http://localhost:8000/api/documentos/${id}`,
        type: 'PUT',
        success: function() {
            location.href = "http://localhost:8000/documentos";
        },
        data: documento
    }).fail(mostraErro);;
}