<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * criada para retornar tela de login
	 * @author Junior Melo <juniormelo94@hotmail.com> - 13/03/2019
	 * 
	 * @return view
	*/
	public function logar()
	{		
		$this->load->view('login');
	}

    /**
     * Cria sessão ao fazer o login
     * @author Junior Melo <juniormelo94@hotmail.com> - 13/03/2019
     * 
     * @return view|redirect
    */
	public function autenticar(){
        $this->load->model("UsuarioModel", "usuarioModel");// chama o modelo usuarios_model
        $email = $this->input->post("email");// pega via post o email que venho do formulario
        $senha = $this->input->post("senha"); // pega via post a senha que venho do formulario
        $usuario = $this->usuarioModel->buscaPorEmailSenha($email,$senha); // acessa a função buscaPorEmailSenha do modelo
 
        if($usuario){
        	session_start();

        	$_SESSION['logado'] = true;
			$_SESSION['usuario'] = $usuario['nome'];
			$_SESSION['email'] = $usuario['email'];

            $dados = array("mensagem" => "Logado com sucesso!");
        	header('Location: '.BASE_URL.'index.php/listarPedidos');
        }else{
            $dados = array("mensagem" => "Usuário não existe ou senha incorreta");
        	$this->load->view("login", $dados);
        }
 
    }
}
