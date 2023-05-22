<?php

class Main_model extends CI_Model
{
    public function logar($dados_login)
    {
        $query = "SELECT count(id) as logado FROM usuarios WHERE email = '" . $dados_login["email"] . "' and senha = '" . $dados_login["senha"] . "'";
        $logado = $this->db->query($query)->result_array();
            if ($logado[0]["logado"] == 1) {
            $query2 = "SELECT * FROM usuarios WHERE email = '" . $dados_login["email"] . "' and senha = '" . $dados_login["senha"] . "'";
            $dados_login = $this->db->query($query2)->result_array();
        }
        return array("logado" => $logado[0]["logado"], "dados_login" => $dados_login[0]);
    }
}
