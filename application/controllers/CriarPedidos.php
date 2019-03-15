<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CriarPedidos extends CI_Controller {

	/**
	 * Retorna a tela de cadastrar pedido
	 * @author Junior Melo <juniormelo94@hotmail.com> - 13/03/2019
	 * 
	 * @return view [retorna os dados da resposta]
	*/
	public function criarView()
	{
		$this->load->view('criarPedido');
	}

	/**
	 * Cria os pedidos na api e salva no banco
	 * @author Junior Melo <juniormelo94@hotmail.com> - 13/03/2019
	 * 
	 * @return view [retorna os dados da resposta]
	*/
	public function criar()
	{
		$this->load->library('Curl');

	    $params = [
	    	"Application" => '3001',
			"ApiKey" => '446efe782027be611e524930212d8e71',
			"Param" =>  $_POST
	    ];

	    $resposta = $this->curl->post(BASE_API_URL.'/ponte/store', json_encode($params));

	    $resposta = json_decode($resposta, true);

	    $dados = $params['Param'];
	    $dados['trackNo'] = $resposta['Result']['TrackNo'];
	   
	    if (empty($resposta['Result']['Message'])) {
		    $this->load->model('PedidosModel', 'pedidos');
		    $this->pedidos->cadastrarPedidos($dados);
		    echo json_encode(
		    	[
		    		'status' => 'success',
		    		'msg' => 'Pedido criado com sucesso!',
		    		'dados' => $dados
		    	]
		    );
	    } else {
	    	echo json_encode(
		    	[
		    		'status' => 'success',
		    		'msg' => $resposta['Result']['Message'],
		    		'dados' => $dados
		    	]
		    );
	    }	   
	}
}
