<?php

class Dono_model extends CI_Model
{

    public function registrar_funcionario($dados)
    {
        $this->db->trans_start();
        $this->db->insert("usuarios", $dados["usuario"]);
        $id = $this->db->insert_id();
        $dados["funcionario"] += ["usuario_id" => $id];
        $this->db->insert("funcionarios", $dados["funcionario"]);
        return $this->db->trans_complete();
    }
}
