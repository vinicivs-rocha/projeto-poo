<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dono extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("dono_model");
		//pega o valor logado e caso seja diferente do tipo ele retorna para o base_url
		$tipo_usuario_sessao = $this->session->userdata("tipo_usuario_id");
		if ($tipo_usuario_sessao != 1) { //dono
			header("Location:" . base_url("/"));
		}
	}


	public function registrar_funcionario() //função para registra o funcionario usando form
	{
		$tipo_usuario_sessao = $this->session->userdata("tipo_usuario_id");
		if ($tipo_usuario_sessao == 1) {
			$email_usuario = $this->input->post("email_usuario");
			$senha_usuario = $this->input->post("senha_usuario");
			$tipo_usuario = $this->input->post("tipo_usuario");
			$nome_funcionario = $this->input->post("nome_funcionario");


			$dados["usuario"] = [
				"email" => $email_usuario,
				"senha" => md5($senha_usuario),
				"tipo_usuario_id" => $tipo_usuario
			];
			$dados["funcionario"] = [
				"nome_funcionario" => $nome_funcionario
			];
			return $this->dono_model->registrar_funcionario($dados);
		} else {
			return false;
		}
	}
}
