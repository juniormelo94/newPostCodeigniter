<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	/**
	 * criada fazer o logout
	 * @author Junior Melo <juniormelo94@hotmail.com> - 13/03/2019
	 * 
	 * @return redirect
	*/
	public function index()
	{	
		session_start();
		session_destroy();		
		header('Location: '.BASE_URL);
	}	
}
