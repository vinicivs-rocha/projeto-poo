<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Rei das argamassas</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css"
        />
        <style>
			.bg-orange {
				background-color: #f5811e;
			}

			.nav-fi {
				height: 1.5em;
			}

			.nav-fi::before {
				font-size: 1.5em;
			}

			.header-fi {
				height: 3rem;
				font-size: 3rem;
			}

			.fi-add-cart {
				height: 1.5rem;
				font-size: 1.5rem;
			}
		</style>
    </head>
    <body>
        <header>
            <nav class="navbar bg-orange">
                <div class="container-fluid">
                    <a
                        href="./carrinho.html"
                        class="navbar-brand p-0 d-flex flex-row"
                    >
                        <i class="fi fi-rr-shopping-cart me-3"></i>
                        Carrinho
                    </a>
                    <ul
                        class="navbar-nav d-flex flex-row justify-content-between"
                    >
                        <li
                            class="navbar-item d-flex flex-row justify-content-center align-items-center"
                        >
                            <span>Vendedor</span>
                            <i class="fi fi-rr-user nav-fi ms-3"></i>
                        </li>
                    </ul>
                </div>
            </nav>
            <div
                class="container mt-3 mb-3 d-flex flex-row justify-content-between"
            >
                <a href="<?=base_url('vendedor/retornar_home_vendedor')?>" class="text-decoration-none">
                    <button
                        type="button"
                        class="btn btn-light d-flex flex-column align-items-center shadow"
                    >
                        <i class="fi fi-rr-arrow-left header-fi"></i>
                        <span class="mt-3">Tela inicial</span>
                    </button>
                </a>
            </div>
        </header>
        <main>
            <div class="container mt-5" id="tabela-produtos">
                <div class="row justify-content-between">
                    <div class="col-1">
                        <p class="fs-4 text-center mb-0">Imagem</p>
                    </div>
                    <div class="col-2">
                        <p class="fs-4 text-center mb-0">Nome</p>
                    </div>
                    <div class="col-2">
                        <p class="fs-4 text-center mb-0">Quantidade</p>
                    </div>
                    <div class="col-2">
                        <p class="fs-4 text-center mb-0">Preço</p>
                    </div>
                    <div class="col-2">
                        <p class="fs-4 text-center mb-0">Subtotal</p>
                    </div>
                </div>
                
            </div>
            <div class="container" id="footer">
                
            </div>
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
            let tabelaProdutos = $("#tabela-produtos")
            let footer = $("#footer")
            tabelaProdutos.ready(buscarListaProdutos)
            footer.ready(montarDadosPedido)

            function buscarListaProdutos() {
                $.ajax({
                    url: "<?=base_url('vendedor/historico_de_venda')?>",
                    type: "GET",
                    dataType: "JSON",
                    success: montarTabelaProdutos
                });
            }
            function montarTabelaProdutos(data) {
                data.forEach(produto => {
                    tabelaProdutos.append(`
                        <div class="row mt-3 justify-content-between">
                            <div class="col-1">
                                <img src="${produto.image}" alt="Produto ${produto.id}" class="img-fluid">
                            </div>
                            <div class="col-2">
                                <p class="text-center mb-0">${produto.nome_produto}</p>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <p class="mb-0 text-center fs-4">${produto.quantidade_comprada}</p>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <p class="mb-0 text-center fs-4">${produto.preco}</p>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <p class="mb-0 text-center fs-4">${produto.preco * produto.quantidade_comprada}</p>
                            </div>
                        </div>
                    `)
                });

            }
            function montarDadosPedido() {
                footer.append(`
                    <div class="row justify-content-between mt-5">
                        <div class="col-4">
                            <h5 class="h5 text-center">Dados do cliente</h6>
                            <p class="fs-5">Nome: <?= $nome_cliente ?></p>
                            <p class="fs-5">Email: <?= $email ?></p>
                            <p class="fs-5">Endereço: <?= $endereco ?></p>
                            <p class="fs-5">Telefone: <?= $telefone ?></p>
                        </div>
                        <div class="col-4 d-flex flex-column justify-content-around align-items-center">
                            <p class="fs-5">Vendedor: <?= $nome_funcionario ?></p>
                            <form action="<?= base_url('vendedor/finalizar_pedido/') ?><?= $id_pedido ?>" method="post">
                                <button type="submit" class="btn btn-light bg-orange">Finalizar pedido</button>
                            </form>
                        </div>
                    </div>
                `)
            }
        </script>
    </body>
</html>

