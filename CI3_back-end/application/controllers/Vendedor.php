<?php

class Vendedor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("vendedor_model");
		//pega o valor logado e caso seja diferente do tipo ele retorna para o base_url
        $tipo_usuario_sessao = $this->session->userdata("tipo_usuario_id");
		if ($tipo_usuario_sessao != 3 and $tipo_usuario_sessao != 1) { //vendedor
            header("Location:". base_url("/"));
        }
    }

    public function criar_pedido() //função ajax para criar um pedido para um cliente
    {

        /* exemplo de como deve vir o array, caso precisem, este é o modelo de retorno que o 
        ajax vai proporcionar, use esse nome de variável

        array_produtos = [
            [
                "id" => "2",
                "valor" => "323",
                "quantidade_comprada" => "13"
            ],
            [
                "id" => "5",
                "valor" => "23",
                "quantidade_comprada" => "2"
            ],
            [
                "id" => "7",
                "valor" => "643",
                "quantidade_comprada" => "35"
            ]
        ];
        */

        $cliente_novo_pedido = $this->input->post("cliente_novo_pedido");
        $array_produtos = $this->input->post("array_produtos"); //por a quantidade de cada produto junto do produto comprado.
        $check_preco = $this->input->post("check_preco");
        $data = date("d/m/Y");
        $vendedor_id = $this->session->userdata("vendedor_id");

        /* 
        usar essa função para o checkbox quando for testar se o usuário está passando valor do produto ou um valor que entrou em acordo
        if ($("#meuCheckbox").is(":checked")) {
 
        } else {
 
        }
        */

        if ($check_preco == false) {
            $preco_acordado = "F";
        } else {
            $preco_acordado = "T";
        }

        $dados_novo_pedido["pedido"] = [
            "vendedor_id" => $vendedor_id,
            "data_venda" => $data,
            "cliente_id" => $cliente_novo_pedido,
            "preco_acordado" => $preco_acordado,
        ];


        $dados_novo_pedido["produtos"] = [
            "array_produtos" => $array_produtos
        ];
        $retorno = $this->vendedor_model->criar_pedido($dados_novo_pedido);
        echo json_encode($retorno);
    }

    public function registrar_cliente()
    {
        $nome_cliente = $this->input->post("nome_cliente");
        $cpf_cliente = $this->input->post("cpf_cliente");
        $endereco_cliente = $this->input->post("endereco_cliente");
        $telefone_cliente = $this->input->post("telefone_cliente");
        $idade_cliente = $this->input->post("idade_cliente");
        $email_cliente = $this->input->post("email_cliente");
        $genero_cliente = $this->input->post("genero_cliente");
        $nacionalidade_cliente = $this->input->post("nacionalidade_cliente");
        $novo_cliente = [
            "nome_cliente" => $nome_cliente,
            "cpf" => $cpf_cliente,
            "endereco" => $endereco_cliente,
            "telefone" => $telefone_cliente,
            "idade" => $idade_cliente,
            "email" => $email_cliente,
            "genero" => $genero_cliente,
            "nacionalidade" => $nacionalidade_cliente,
        ];

        $retono = $this->vendedor_model->registrar_cliente($novo_cliente);
        echo json_encode($retono);
    }

    //para excluir, apenas apaga o valor na tela e clicar em salvar assim ele exclui o que quer e deixa o que já tem
    public function edita_dados_cliente()
    {
        $nome_cliente = $this->input->post("nome_cliente");
        $cpf_cliente = $this->input->post("cpf_cliente");
        $endereco_cliente = $this->input->post("endereco_cliente");
        $telefone_cliente = $this->input->post("telefone_cliente");
        $idade_cliente = $this->input->post("idade_cliente");
        $email_cliente = $this->input->post("email_cliente");
        $genero_cliente = $this->input->post("genero_cliente");
        $nacionalidade_cliente = $this->input->post("nacionalidade_cliente");
        $novos_dados_cliente = [
            "nome_cliente" => $nome_cliente,
            "cpf" => $cpf_cliente,
            "endereco" => $endereco_cliente,
            "telefone" => $telefone_cliente,
            "idade" => $idade_cliente,
            "email" => $email_cliente,
            "genero" => $genero_cliente,
            "nacionalidade" => $nacionalidade_cliente,
        ];
        $retono = $this->vendedor_model->edita_dados_cliente($novos_dados_cliente);
        echo json_encode($retono);
    }

    //ou pega todos os clientes ou só o específico pelo id
    public function pesquisa_cliente($id = null){
        $retono = $this->vendedor_model->pesquisa_cliente($id);
        echo json_encode($retono);
    }
}