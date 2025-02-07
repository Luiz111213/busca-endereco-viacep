$(document).ready(function() {
    $("#meuFormulario").on("submit", function(event) {
        event.preventDefault();  

        var formData = {
            cep: $("#cep").val(),
            logradouro: $("#logradouro").val(),
            rua: $("#rua").val(),
            bairro: $("#bairro").val(),
            cidade: $("#cidade").val(),
            estado: $("#estado").val(),
            numero: $("#numero").val()
        };

        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $("#resultado").html("Enviando dados...");

        $.ajax({
            url: "{{ route('enderecos.store') }}", 
            type: "POST",                         
            data: JSON.stringify(formData),        
            dataType: "json",                      
            contentType: "application/json",       
            headers: {
                'X-CSRF-TOKEN': csrfToken        
            },
            success: function(response) {
                $("#resultado").html("Dados enviados com sucesso!");  
                console.log(response);  
            },
            error: function(jqXHR, textStatus, errorThrown) {

                $("#resultado").html("Erro ao enviar os dados.");
                console.log(textStatus, errorThrown);
            }
        });
    });
});
