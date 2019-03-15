<?php

class UsuarioModel extends CI_Model{

    public function buscaPorEmailSenha($email, $senha){
        $this->db->where("email", $email);
        $this->db->where("senha", $senha);
        $usuario = $this->db->select('nome', 'email')->get("usuarios")->row_array();
        return $usuario;
    }
}