<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rei das argamassas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css" />
</head>
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

<body>
    <header>
        <nav class="navbar bg-orange">
            <div class="container-fluid">
                <a href="./carrinho.html" class="navbar-brand p-0">
                    <i class="fi fi-rr-shopping-cart"></i>
                </a>
                <ul class="navbar-nav">
                    <li class="navbar-item d-flex flex-row justify-content-center align-items-center">
                        <span>Vendedor</span>
                        <i class="fi fi-rr-user nav-fi ms-3"></i>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container mt-3 mb-3 d-flex flex-row justify-content-between">
            <button type="button" class="btn btn-light d-flex flex-column align-items-center shadow" data-bs-toggle="modal" data-bs-target="#add-client-modal">
                <i class="fi fi-rr-user-add header-fi"></i>
                <span class="mt-3">Cadastrar cliente</span>
            </button>

            <a href="<?=base_url('vendedor/retornar_home_vendedor')?>" class="text-decoration-none">
                <button type="button" class="btn btn-light d-flex flex-column align-items-center shadow">
                    <i class="fi fi-rr-arrow-left header-fi"></i>
                    <span class="mt-3">Tela inicial</span>
                </button>
            </a>
        </div>
    </header>
    <main class="container">
        <div class="row g-3" id="container-row">
        </div>
    </main>
    <div class="modal fade" tabindex="-1" id="add-product-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Adicionar produto ao carrinho
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Adicionar rota de adição do produto ao pedido criado -->
                <form action="<?=base_url('vendedor/criar_pedido/').$id_pedido?>" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <input type="number" name="id" id="id" class="d-none">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" name="nome_produto" id="name" class="form-control" disabled readonly />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="price" class="form-label">Preço</label>
                                <div class="input-group">
                                    <span class="input-group-text">R$</span>
                                    <input type="number" name="preco" id="price" class="form-control" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="quantity" class="form-label">Quantidade</label>
                                <div class="input-group">
                                    <input type="number" name="estoque" id="quantity" class="form-control" />
                                    <span class="input-group-text">unid.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-light bg-orange">
                            Adicionar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-2" id="add-client-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastrar cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Adicionar rota de criação de cliente -->
                <form action="<?=base_url('vendedor/cadastrar_cliente')?>" method="post">
                    <div class="modal-body">
                        <div class="row g-3 mb-3">
                            <div class="col-8">
                                <label for="client-name" class="form-label">Nome:</label>
                                <input type="text" name="nome" id="client-name" class="form-control" />
                            </div>
                            <div class="col-4">
                                <label for="client-gender" class="form-label">Gênero:</label>
                                <input type="text" name="genero" id="client-gender" class="form-control" />
                            </div>
                        </div>
                        <div class="row g-3 justify-content-start mb-3">
                            <div class="col-2">
                                <label for="client-age" class="form-label">Idade:</label>
                                <input type="number" name="idade" id="client-age" class="form-control" />
                            </div>
                            <div class="col-4">
                                <label for="client-phone" class="form-label">Telefone:</label>
                                <input type="tel" name="telefone" id="client-phone" class="form-control" />
                            </div>
                        </div>
                        <div class="row g-3 justify-content-start mb-3">
                            <div class="col-4">
                                <label for="client-cpf" class="form-label">CPF:</label>
                                <input type="text" name="cpf" id="client-cpf" class="form-control" />
                            </div>
                            <div class="col-6">
                                <label for="client-email" class="form-label">Email:</label>
                                <input type="email" name="email" id="client-email" class="form-control" />
                            </div>
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12">
                                <label for="client-address" class="form-label">Endereço:</label>
                                <input type="text" name="endereco" id="client-address" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-light bg-orange">
                            Cadastrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(buscarProdutos)

        let containerRow = $("#container-row")

        function buscarProdutos() {
            $.ajax({
                url: '<?= base_url('vendedor/pesquisa_produtos') ?>',
                type: "GET",
                dataType: "JSON",
                cache: false,
                success: montarProdutos
            })
        }

        function montarProdutos(data) {
            console.log(data);
            data.forEach(product => {
                containerRow.append(`
                    <div class="col-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    ${product.nome_produto}
                                </h5>
                            </div>
                            <img src="${product.image}" alt="${product.nome_produto}" class="card-img-bottom" />
                            <div class="card-footer d-flex flex-row justify-content-end">
                                <button type="button" class="btn btn-light" data-name="${product.nome_produto}" data-price="${product.preco}" data-id="${product.id}" data-bs-toggle="modal" data-bs-target="#add-product-modal">
                                    <i class="fi fi-rr-cart-arrow-down fi-add-cart d-flex"></i>
                                </button>
                            </div>
                        </div>
                    </div>
            `)
            });
        }
    </script>
    <script>
        const addProductModal = document.querySelector('#add-product-modal')
        const modalNameInput = document.querySelector('#name')
        const modalPriceInput = document.querySelector('#price')
        const modalIdInput = document.querySelector('#id')

        addProductModal.addEventListener('shown.bs.modal', ({
            relatedTarget
        }) => {
            modalNameInput.value = relatedTarget.dataset.name
            modalPriceInput.value = relatedTarget.dataset.price
            modalIdInput.value = relatedTarget.dataset.id
        })
    </script>
</body>

</html>