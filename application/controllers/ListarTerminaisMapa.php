<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListarTerminaisMapa extends CI_Controller {


	public function getGeoData()
	{
		$this->load->library('Curl');

		$params = [
		    "pRequest" => json_encode([
		        "Application" => "2007","ApiKey" => "8270ff40b615741102902416ab742306","Param" => ["Time" => "1547498221"]
		    ])
		];

		$resposta = $this->curl->post(BASE_API_URL.'/sistema_cn/api/logistics/appinterface', $params);

		$resposta = json_decode($resposta, true);

		echo json_encode($resposta['Result']);	
	}

	/**
	 * Lista terminais no mapa
	 * @author Junior Melo <juniormelo94@hotmail.com> - 13/03/2019
	 * 
	 * @return view
	*/
	public function listar()
	{		
		$this->load->view('listarTerminaisMapa');
	}
}
