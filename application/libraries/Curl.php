<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curl{

	/**
	 * criada para executar curl via get	 * 
	 * @author Junior Melo <juniormelo94@hotmail.com> - 13/03/2019
	 * 
	 * @param  $url [url que será chamada]
	 *
	 * @return array [retorna os dados da resposta em array]
	*/
	public function get($url)
	{
		if(empty($url)) {
			throw new Exception("Por favor informe a url", 1);
		}
		$curl = curl_init();
		curl_setopt_array($curl, [
		    CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_URL => $url,
		    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
		]);
		$resposta = curl_exec($curl);
		curl_close($curl);

		return $resposta;
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
	public function post($url, $params)
	{
		if(empty($url)) {
			throw new Exception("Por favor informe a url", 1);
		}

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => $params,
		  CURLOPT_HTTPHEADER => array(
		    "content-type: multipart/form-data;"
		  ),
		));

		$resposta = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		}

		return $resposta;
	}

	// public function criandoPedido($url, $params)
	// {

	// 	$curl = curl_init();

	// 	curl_setopt_array($curl, array(
	// 	  CURLOPT_URL => $url,
	// 	  CURLOPT_RETURNTRANSFER => true,
	// 	  CURLOPT_ENCODING => "",
	// 	  CURLOPT_MAXREDIRS => 10,
	// 	  CURLOPT_TIMEOUT => 0,
	// 	  CURLOPT_FOLLOWLOCATION => false,
	// 	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	// 	  CURLOPT_CUSTOMREQUEST => "POST",
	// 	  CURLOPT_POSTFIELDS => $params,
	// 	  CURLOPT_HTTPHEADER => array(
	// 	    "Content-Type: application/json"
	// 	  ),
	// 	));

	// 	$response = curl_exec($curl);
	// 	$err = curl_error($curl);

	// 	curl_close($curl);

	// 	if ($err) {
	// 	  echo "cURL Error #:" . $err;
	// 	} else {
	// 	  echo $response;
	// 	} 
	// }


}
