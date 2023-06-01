<?php

class Estoquista extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("estoquista_model");
		//pega o valor logado e caso seja diferente do tipo ele retorna para o base_url
        $tipo_usuario_sessao = $this->session->userdata("tipo_usuario_id");
		if ($tipo_usuario_sessao > 2) { //estoquista
            header("Location:". base_url("/"));
        }
    }

    public function gerar_nota_fiscal_eletronica()
    {
        return true;
    }

    public function despache_pedido($id)
    {
        $data = date("d/m/Y");
        $retorno = $this->estoquista_model->despachar_pedido($id, $data);
        echo json_encode($retorno);
    }

    //pesquisa todas as datas ou só a específica pelo id
    public function pesquisa_data_despacho($id = null)
    {
        $retono = $this->estoquista_model->pesquisa_data_despacho($id);
        echo json_encode($retono);
    }

    
    public function registro_produtos() //função ajax para registrar produtos novos usando post
    {
        $nome_produto = $this->input->post("nome_produto");
        // $codigo = $this->input->post("codigo_produto");
        $estoque = $this->input->post("estoque_produto");
        $preco = $this->input->post("preco_produto");
        $produtos = [
            "nome_produto" => $nome_produto,
            //"codigo" => $codigo,
            "estoque" => $estoque,
            "saida" => "0",
            "preco" => $preco
        ];

        $retorno = $this->estoquista_model->registrar_produto($produtos);
        echo json_encode($retorno);
    }

    public function atualiza_produto() //função ajax para atualizar produtos usando post
    {
        $id_produto = $this->input->post("id_produto");
        $nome_produto = $this->input->post("nome_produto");
        // $codigo = $this->input->post("codigo_produto");
        $novo_estoque = $this->input->post("novo_estoque");
        $novo_preco_produto = $this->input->post("novo_preco_produto");
        $produtos = [
            "nome_produto" => $nome_produto,
            // "codigo" => $codigo,
            "estoque" => $novo_estoque,
            "saida" => "0",
            "preco" => $novo_preco_produto
        ];

        $retorno = $this->estoquista_model->atualiza_produto($produtos, $id_produto);
        echo json_encode($retorno);
    }

    public function pesquisa_produtos()
    {
        $id_produto = $this->input->post("id_produto");
        $retorno = $this->estoquista_model->pesquisa_produtos($id_produto);
        echo json_encode($retorno);
    }

    public function remover_produto($id_produto){
        $this->estoquista_model->remover_produto($id_produto);
        $this->load->view('estoque');
    }

}
