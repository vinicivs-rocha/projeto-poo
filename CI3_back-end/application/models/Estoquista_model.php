<?php

class Estoquista_model extends CI_Model
{

    public function despachar_pedido($id_pedido, $data)
    {
        $dados = [
            "status_pedido_id" => 2,
            "data_despacho" => $data
        ];
        return $this->db->where("id", $id_pedido)->update("pedidos", $dados);
    }
    public function registrar_produto($produtos)
    {
        return $this->db->insert("produtos", $produtos);
    }
    public function atualiza_produto($produtos, $id_produto)
    {
        $this->db->where("id", $id_produto);
        return $this->db->update("produtos", $produtos);
    }
    public function pesquisa_data_despacho($id_pedidos)
    {
        $this->db->select("clientes.nome_cliente,funcionarios.nome_funcionario,status_pedido.tipo_status, pedidos.data_despacho");
        $this->db->from("pedidos");
        $this->db->join("clientes", "clientes.id = pedidos.cliente_id");
        $this->db->join("funcionarios", "funcionarios.id = pedidos.vendedor_id");
        $this->db->join("status_pedido", "status_pedido.id = pedidos.status_pedido_id");
        if ($id_pedidos != null) {
            $this->db->where("pedidos.id", $id_pedidos);
        }
        return $this->db->get()->result_array();
    }
    public function pesquisa_produtos($id_produto = null)
    {
        $this->db->from("produtos");
        if ($id_produto != null) {
            $this->db->where("pedidos.id", $id_produto);
        }
        return $this->db->get()->result_array();
    }
    public function edita_dados_cliente($novos_dados_cliente)
    {
        return $this->db->update("clientes", $novos_dados_cliente);
    }
    public function remover_produto($id_produto)
    {
        $this->db->where('id',$id_produto);
        return $this->db->delete("produtos");
    }
}
