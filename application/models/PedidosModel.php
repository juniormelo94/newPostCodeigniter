<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PedidosModel extends CI_Model {

	public function cadastrarPedidos($dados)
	{	
		try {
			$this->db->insert('pedidos', $dados);
			return true;			
		} catch (Exception $e) {
			throw new Exception("Erro ao salvar o pedido", 1);
		}
	}


	public function listarPedidos()
	{
		$resultado = $this->db			
			->get("pedidos")
			->result();

		return $resultado;
	}
}

?>