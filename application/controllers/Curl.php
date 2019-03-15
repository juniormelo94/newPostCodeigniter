<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curl extends CI_Controller {

	/**
	 * criada para executar curl via get	 * 
	 * @author Junior Melo <juniormelo94@hotmail.com> - 13/03/2019
	 * 
	 * @param  $url [url que será chamada]
	 *
	 * @return array [retorna os dados da resposta em array]
	*/
	public static function get($url)
	{
		if(empty($url)) {
			throw new Exception("Por favor informe a url", 1);
		}
		// Get cURL resource
		$curl = curl_init();
		// Set some options - we are passing in a useragent too here
		curl_setopt_array($curl, [
		    CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_URL => $url,
		    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
		]);
		// Send the request & save response to $resp
		$resp = curl_exec($curl);
		
		// Close request to clear up some resources
		curl_close($curl);

		echo "<pre>";
		print_r($resp);
		exit;
	}

	/**
	 * criada para executar curl via post
	 * @author Junior Melo <juniormelo94@hotmail.com> - 13/03/2019
	 * 
	 * @param  $url [url que será chamada]
	 * @param  $params [parametros que serão enviados]
	 *
	 * @return array [retorna os dados da resposta em array]
	*/
	public static function post($url, $params)
	{

		if(empty($url)) {
			throw new Exception("Por favor informe a url", 1);
		}
		// set post fields
		$post = [
		    'username' => 'user1',
		    'password' => 'passuser1',
		    'gender'   => 1,
		];

		$ch = curl_init('http://www.example.com');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

		// execute!
		$response = curl_exec($ch);

		// close the connection, release resources used
		curl_close($ch);

		// do anything you want with your response
		var_dump($response);

		echo "<pre>";
		print_r($resp);
		exit;
	}


}
