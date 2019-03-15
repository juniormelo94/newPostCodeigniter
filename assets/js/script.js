
function btnEnviar()
{
	// $("#btnEnviar").attr("disabled", "disabled");
	var dados = $('#formPedido').serialize();

	$.ajax({
		type: "POST",
        url: "http://localhost/validarEmail/index.php/cPedidoController",
        data: dados,
        dataType:"json",
        success: function(resposta)
        {
        	console.log("resposta");
    		console.log(resposta);
    		alert(data);
    		
        },

        error: function(erro)
        {
    		console.log("erro");
    		console.log(erro);
    		// alert(data);
    	}
	});
}