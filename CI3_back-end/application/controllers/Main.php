<?php

class Main extends CI_Controller
{
    public function index(){
        $this->load->view('login');
    }
    public function login()
    {
        $this->load->model("main_model");

        $email = $this->input->post('username');
        $senha = $this->input->post('senha');
            $dados_login = [
                "email" => $email,
                "senha" => $senha
            ];
            $retorno = $this->main_model->logar($dados_login);
            if ($retorno["logado"] == 1) {
                $this->montar_sessao($retorno["dados_login"]);
                $id_usuario = $this->session->userdata('id_usuario');
                //por aqui a view para caso exista esse usuario cadastrado
                if($id_usuario == 1){
                    $this->load->view('home_estoquista');
                }
                else{
                    $this->load->view('home_vendedor');
                }
            } else {
                $this->load->view('login');
            }
            //por a view de login novamente. caso a senha e confirmação da senha não sejam iguais ele volta para a view
    }

    public function montar_sessao($dados)
    {
        $dados_sessao = [
            "id_usuario" => $dados["id"],
            "tipo_usuario_id" => $dados["tipo_usuario_id"]
        ];
        $this->session->set_userdata($dados_sessao);
    }

    public function retornar_home_estoquista(){
        $this->load->view('home_estoquista');
    }

    public function tela_vendedor(){
        $this->session->user_data('id_pedido');
        $this->load->view('vendedor');
    }

    public function carregar_estoque(){
        $this->load->view('estoque');
    }

    public function pedidos(){
        $this->load->view('pedidos');
    }

    public function remover_produto($id_produto){
        $valor['id_produto'] = $id_produto;
        $this->load->view('remover_produto',$valor);
    }
}
