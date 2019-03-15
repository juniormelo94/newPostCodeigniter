<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NEWPOST</title>
	
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="http://localhost/newpost/assets/css/style.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7fa_ntyynAakB4rJ8BeYrmxHWvBuqON8"></script>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">NEWPOST</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link active" href="http://localhost/newpost/index.php/listarPedidos">Lista de Pedidos <span class="sr-only">(current)</span></a>
	      <a class="nav-item nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Criar Pedido</a>
	      <a class="nav-item nav-link" href="http://localhost/newpost/index.php/listarTerminais">Listar Terminais</a>

	      <a class="nav-item nav-link" href="http://localhost/newpost/index.php/listarTerminaisMapa">Listar Terminais no Mapa</a>	      
	    </div>
	  </div>
	</nav>