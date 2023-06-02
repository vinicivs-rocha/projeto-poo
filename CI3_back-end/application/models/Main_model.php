<?php

class Main_model extends CI_Model
{
    public function logar($dados_login)
    {
        $query = "SELECT count(id) as logado FROM usuarios WHERE email = '".$dados_login["email"]."' AND senha = '" . $dados_login["senha"] . "'";
        $logado = $this->db->query($query)->row_array();
            if ($logado["logado"] == 1) {
            $query2 = "SELECT * FROM usuarios WHERE email = '" . $dados_login["email"] . "' AND senha = '" . $dados_login["senha"] . "'";
            $dados_login = $this->db->query($query2)->row_array();
        }
        return array("logado" => $logado["logado"], "dados_login" => $dados_login);
    }
}
