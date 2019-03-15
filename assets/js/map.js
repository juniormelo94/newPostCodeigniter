var marcadores = []

$.ajax({
	type: "GET",
    url: "http://localhost/newpost/index.php/getGetGeoData",
    dataType:"json",
    success: function(resposta)
    {
		marcadores = resposta;
		mostrarMapa();
		
    },
    error: function(erro)
    {
		console.log("erro");
		console.log(erro);
	}
});


function mostrarMapa()
{

	var sectionMapa = document.getElementById("mapa");
	var logo = "http://unibratec.edu.br/faculdade/wp-content/uploads/2015/07/favicon.ico";
	var plotar = function(marcador){
		var latlng = new google.maps.LatLng(marcador.Latitude,marcador.Longitude); 
	  
	    var conteudo = "<h3>" + marcador.Position + "</h3><p>" + marcador.TerminalName + "</p>";
	    var marker = new google.maps.Marker({
	    position: latlng,
	    map: mapa,
	    title: marcador.TerminalName,
	    animation: google.maps.Animation.DROP
	});
	  
	var info = new google.maps.InfoWindow({
	    content:conteudo,
	    maxWidth: 300
	});

	google.maps.event.addListener(marker,"click", function(){
	    info.open(mapa,marker);
	  });	  
	}

	var latlngMapa = new google.maps.LatLng(-22.9020447251, -43.1881992472); 
	var options={
	  center: latlngMapa,
	  zoom: 3
	}

	var mapa = new google.maps.Map(sectionMapa, options);

	for(i = 0; i < marcadores.length; i++){
	  plotar(marcadores[i]);
	}
}