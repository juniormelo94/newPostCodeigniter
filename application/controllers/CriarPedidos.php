<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CriarPedidos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http => //example.com/index.php/welcome
	 *	- or -
	 * 		http => //example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http => //example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https => //codeigniter.com/user_guide/general/urls.html
	 */
	public function criarView()
	{
		$this->load->view('criarPedido');
	}

	public function criar()
	{
		$this->load->library('Curl');

	    // echo '<pre>';
	    // print_r($_POST);]
	    // echo BASE_API_URL;
	    // exit;

	  //   $params = [
	  //   	"Application" => '3001',
			// "ApiKey" => '446efe782027be611e524930212d8e71',
			// "Param" =>  [
		 //        "OrderNumber" =>  "TESTEPRAIA4",
		 //        "CourierCode" =>  "000001",
		 //        "TerminalSN" =>  "1830111-01",
		 //        "PhoneNumber" =>  "21997802752",
		 //        "Nickname" =>  "Joao Mendes",
		 //        "Email" =>  "joao.mendes@newpost.com",
		 //        "Quantity" =>  "2",
		 //        "Size" =>  "15"
		 //    ]
	  //   ];

	     // echo '<pre>';
	    // print_r($_POST);
	    // exit;

	    $params = [
	    	"Application" => '3001',
			"ApiKey" => '446efe782027be611e524930212d8e71',
			"Param" =>  $_POST
	    ];

	    $resposta = $this->curl->post(BASE_API_URL.'/ponte/store', json_encode($params));

	    $resposta = json_decode($resposta, true);

	    $dados = $params['Param'];
	    $dados['trackNo'] = $resposta['Result']['TrackNo'];

	    $this->load->model('PedidosModel', 'pedidos');
	    $this->pedidos->cadastrarPedidos($dados);


	    return $this->load->view('inseriPedidoLista');

		// $resposta = json_decode($resposta, true);

		// echo 'teste<pre>';
	 //    print_r($resposta);
	 //    exit;


		
		// {
		//     "Application" =>  "3001",
		//     "ApiKey" =>  "446efe782027be611e524930212d8e71",
		//     "Param" =>  {
		//         "OrderNumber" =>  "TESTEPRAIA4",
		//         "CourierCode" =>  "000001",
		//         "TerminalSN" =>  "1830111-01",
		//         "PhoneNumber" =>  "21997802752",
		//         "Nickname" =>  "Joao Mendes",
		//         "Email" =>  "joao.mendes@newpost.com",
		//         "Quantity" =>  "2",
		//         "Size" =>  "15"
		//     }
		// }
	}
}
