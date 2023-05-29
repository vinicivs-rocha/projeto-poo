<?php

class Main extends CI_Controller
{
    public function login()
    {
        $this->load->model("main_model");

        $email = $this->input->post('username');
        $senha = $this->input->post('senha');

            $dados_login = [
                "email" => $email,
                "senha" => md5($senha)
            ];

            $retorno = $this->main_model->logar($dados_login);

            if ($retorno["logado"] == 1) {
                $this->montar_sessao($retorno["dados_login"]);
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
}
