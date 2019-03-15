<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListarPedidos extends CI_Controller {

	/**
	 * criada para executar curl via post
	 * @author Junior Melo <juniormelo94@hotmail.com> - 13/03/2019
	 * 
	 * @return view [retorna os dados da resposta]
	*/
	public function listar()
	{		
		$this->load->model('PedidosModel', 'pedidos');

		$pedidos = $this->pedidos->listarPedidos();		

		$this->load->view('listarPedidos', ["pedidos" => $pedidos]);
	}
}
