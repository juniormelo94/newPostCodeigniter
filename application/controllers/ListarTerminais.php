<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListarTerminais extends CI_Controller {

	/**
	 * Lista os terminais em tabela
	 * @author Junior Melo <juniormelo94@hotmail.com> - 13/03/2019
	 * 
	 * @return view [retorna os dados da resposta]
	*/
	public function listar()
	{		
		$this->load->library('Curl');

		$params = [
		    "pRequest" => json_encode([
		        "Application" => "2007","ApiKey" => "8270ff40b615741102902416ab742306","Param" => ["Time" => "1547498221"]
		    ])
		];

		$resposta = $this->curl->post(BASE_API_URL.'/sistema_cn/api/logistics/appinterface', $params);

		$resposta = json_decode($resposta, true);	

		$this->load->view('listarTerminais', ["resposta" => $resposta]);
	}
}
