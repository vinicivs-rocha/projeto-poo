<?php

class Vendedor_model extends CI_Model
{
    public function criar_pedido($dados_novo_pedido)
    {
        $this->db->trans_start();
        // $this->db->insert("pedidos", $dados_novo_pedido["pedido"]);
        // $pedido_id = $this->db->insert_id();
        // $dados_novo_pedido["produtos"] += ["pedido_id" => $pedido_id];

        foreach ($dados_novo_pedido["produtos"]['array_produtos'] as $key => $value) {
            $nova_venda = [
                "pedido_id" => $value["pedido_id"],
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

    public function finalizar_pedido($id)
    {
        $data = [
            'status_pedido_id' => 2
        ];
        $this->db->where('id_pedido',$id);
        return $this->db->update('pedidos',$data);
    }

    public function criar_pedido_aberto($cpf,$id_profissional)
    {
        $this->db->trans_start();
        $dados_cliente = $this->db->select('id,nome_cliente,cpf')
                                        ->from('clientes')
                                        ->where('cpf ="'.$cpf.'"')->get()->row_array();
        // var_dump($dados_cliente);exit;
        $dados_pedido = [
            'vendedor_id' => $id_profissional,
            'cliente_id' => $dados_cliente['id'],
            'status_pedido_id' => 0,
            'preco_acordado' => 0
        ];
        $this->db->insert('pedidos',$dados_pedido);
        $id_pedido = $this->db->insert_id();
        $this->db->trans_complete();
        return $id_pedido;
    }

    public function cadastra_cliente($dados)
    {
        return $this->db->insert('clientes',$dados);
    }

    public function pedido_aberto($id_usuario){
        $this->db->select('*')
                            ->from('pedidos')
                            ->join('funcionarios','funcionarios.id ="'.$id_usuario.'"')
                            ->join('clientes','pedidos.cliente_id = clientes.id')
                            ->where('vendedor_id',$id_usuario)
                            ->where('status_pedido_id','0');
        return $this->db->get()->row_array();
    }

    public function buscar_produtos_historico($id_pedido){
        $this->db->select('*')
                        ->from('historico_venda')
                        ->join('produtos',"produtos.id = historico_venda.produto_id")
                        ->where('pedido_id',$id_pedido);
                        return $this->db->get()->result_array();
    }

    public function buscar_cpf(){
        $this->db->select('cpf')
                            ->from('clientes');
        return $this->db->get()->result_array();
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

    public function pesquisa_produtos($id_produto = null)
    {
        $this->db->from("produtos");
        if ($id_produto != null) {
            $this->db->where("pedidos.id", $id_produto);
        }
        return $this->db->get()->result_array();
    }
}
