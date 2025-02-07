$("#cep").on("input", function(event) {
    var numCep = $(this).val();

    if (numCep.length === 8) {
        var url = "https://viacep.com.br/ws/" + numCep + "/json/";

        $.ajax({
            url: url,
            type: "GET", 
            dataType: "json",

            success: function(dados) {
                console.log(dados);
                if (dados.erro) {
                    alert("CEP não encontrado.");
                } else {
                    $("#logradouro").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#cidade").val(dados.localidade);
                    $("#estado").val(dados.uf);
                    $("#rua").val(dados.logradouro);
                }
            },
            error: function() {
                alert("Erro ao buscar o CEP.");
            }
        });
    }
});
