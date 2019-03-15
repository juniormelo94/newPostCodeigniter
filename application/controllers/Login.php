<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * criada para executar curl via post
	 * @author Junior Melo <juniormelo94@hotmail.com> - 13/03/2019
	 * 
	 * @return view [retorna os dados da resposta]
	*/
	public function logar()
	{		
		$this->load->view('login');
	}
}
