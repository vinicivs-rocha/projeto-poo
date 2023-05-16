<?php

class Vendedor_model extends CI_Model
{
    public function criar_pedido($dados_novo_pedido)
    {
        $this->db->trans_start();
        $this->db->insert("pedidos", $dados_novo_pedido["pedido"]);
        $pedido_id = $this->db->insert_id();
        $dados_novo_pedido["produtos"] += ["pedido_id" => $pedido_id];

        foreach ($dados_novo_pedido["produtos"]['array_produtos'] as $key => $value) {
            $nova_venda = [
                "pedido_id" => $pedido_id,
                "produto_id" => $value["id"],
                "valor_produto" => $value["valor"],
                "quantidade_comprada" => $value["quantidade_comprada"]
            ];
            $this->db->insert("historico_venda", $nova_venda);
            $retorno = $this->db->select("saida, estoque")->from("produtos")->where("id", $value["id"])->get()->result_array()[0];

            //atualiza a saida e estoque após a venda
            $query = "UPDATE produtos SET saida = " . intval($retorno["saida"]) . " + " . $value['quantidade_comprada'] . ", estoque = " . intval($retorno["estoque"]) . " - " . $value['quantidade_comprada'] . " where id = " . $value["id"];
            $this->db->query($query);
        }

        return $this->db->trans_complete();
    }

    public function retorna_produtos()
    {
        return $this->db->from("produtos")->get()->result_array();
    }

    public function pesquisa_cliente($id_cliente)
    {
        $this->db->from("clientes");
        if ($id_cliente != null) {
            $this->db->where("id", $id_cliente);
        }
        return $this->db->get()->result_array();
    }

    public function registrar_cliente($novo_cliente)
    {
        return $this->db->insert("clientes", $novo_cliente);
    }

    public function edita_dados_cliente($novos_dados_cliente)
    {
        return $this->db->update("clientes", $novos_dados_cliente);
    }
}
