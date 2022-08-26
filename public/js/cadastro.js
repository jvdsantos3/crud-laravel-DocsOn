$("#btn-cadastra").click(enviaDados);

function criaDados() {
    const titulo = $("#titulo").val();
    const nome_arquivo = $("#nome_arquivo").val();
    const tipo_id = $("#nome_tipo").val();

    const documento = {
        titulo: titulo,
        nome_arquivo: nome_arquivo,
        tipo_id: tipo_id
    }

    return documento;
}

function mostraErro() {
    $("#erro").toggle();
    
    setTimeout(function() {
        $("#erro").toggle();
    }, 5000);
}

function enviaDados(data) {
    event.preventDefault();

    const documento = criaDados();

    $.post("http://localhost:8000/api/documentos", documento, function(result){
        location.href = "http://localhost:8000/documentos";
    }).fail(mostraErro);
}
