
function btnEnviar()
{
	$("#btnEnviar").attr("disabled", "disabled");
	var dados = $('#formPedido').serialize();

	$.ajax({
		type: "POST",
        url: "http://localhost/newpost/index.php/cPedidoController",
        data: dados,
        dataType:"json",
        success: function(resposta)
        {
        	console.log("resposta");
    		console.log(resposta.msg);
            $("#criar-pedido-mensagem").text(resposta.msg);
            $("#btnEnviar").attr("disabled", false);
    		
        },

        error: function(erro)
        {
    		console.log("erro");
    		console.log(erro);
    		// alert(data);
    	}
	});
}