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
		// echo "<pre>";
		// print_r($resposta['Result']);
		// exit;
	}

	/**
	 * criada para executar curl via post
	 * @author Junior Melo <juniormelo94@hotmail.com> - 13/03/2019
	 * 
	 * @return view [retorna os dados da resposta]
	*/
	public function listar()
	{		
		$this->load->view('listarTerminaisMapa');

	// 	[
	//    {
	//       lat: 40.6386333,
	//       lng: -8.745,
	//       nome: "Parque de Campismo Praia da Barra",
	//       morada1:"Rua Diogo Cão, 125",
	//       morada2: "Praia da Barra",
	//       codPostal: "3830-772 Gafanha da Nazaré" // não colocar virgula no último item de cada maracdor
	//    },
	//    {
	//       lat: 40.59955,
	//       lng: -8.7498167,
	//       nome: "Parque de Campismo da Costa Nova",
	//       morada1:"Quinta dos Patos, n.º 2",
	//       morada2: "Praia da Costa Nova",
	//       codPostal: "3830-453 Gafanha da Encarnação" // não colocar virgula no último item de cada maracdor
	//    },
	//    {
	//       lat: 40.6247167,
	//       lng: -8.7129167,
	//       nome: "Parque de Campismo da Gafanha da Nazaré",
	//       morada1:"Rua dos Balneários do Complexo Desportivo",
	//       morada2: "Gafanha da Nazaré",
	//       codPostal: "3830-225 Gafanha da Nazaré" // não colocar virgula no último item de cada maracdor
	//    } // não colocar vírgula no último marcador
	// ];
	}
}
