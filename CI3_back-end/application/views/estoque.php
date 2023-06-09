<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rei das argamassas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css" />
    <link rel="stylesheet" href="<?=base_url('static/estoque.css')?>" />
</head>

<style>
    .navbar {
        background-color: #f5811e;
    }

    .button-icons::before {
        font-size: 3em;
    }

    .btn-submit {
        background-color: #f5811e;
    }
</style>

<body>
    <header>
        <nav class="navbar navbar-expend-xxl shadow-sm">
            <div class="container-fluid flex-row justify-content-center">
                <div class="navbar-nav row flex-row">
                    <div class="nav-item col d-flex flex-column justify-content-center">
                        <i class="fi fi-rr-user d-flex"></i>
                    </div>
                    <div class="nav-item col">
                        <p class="nav-link mb-0">Estoque</p>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid mt-3 d-flex flex-row justify-content-between">
            <a href="#" class="text-decoration-none">
                <button type="button" class="btn btn-light d-flex flex-column align-items-center shadow-sm" data-bs-toggle="modal" data-bs-target="#modal-criar" data-image="
                        ">
                    <i class="fi fi-rr-boxes button-icons"></i>
                    Atualizar estoque
                </button>
            </a>
            <a href="<?= base_url('main/retornar_home_estoquista') ?>" class="text-decoration-none">
                <button type="button" class="btn btn-light d-flex flex-column align-items-center shadow-sm">
                    <i class="fi fi-rr-arrow-left button-icons"></i>
                    Tela inicial
                </button>
            </a>
        </div>
    </header>
    <main>
        <div id="modalAtualizacao" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <form method="post" action="<?= base_url('estoquista/atualiza_produto') ?>">
                        <input type="number" name="id_produto" id="modal-id" class="d-none">
                        <div class="modal-header">
                            <h5 class="modal-title">Atualizar produto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row gx-3">
                                    <input type="hidden" id="id_produto" name="id_produto">
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col">
                                                <label for="modal-name" class="col-form-label">Nome</label>
                                                <input type="text" name="nome_produto" id="modal-name" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <label for="modal-price" class="col-form-label">Preço</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">R$</span>
                                                    <input type="number" name="preco" id="modal-price" class="form-control" step="0.01" />
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="modal-quantity" class="col-form-label">Quantidade</label>
                                                <div class="input-group">
                                                    <input type="number" name="estoque" id="modal-quantity" class="form-control" />
                                                    <span class="input-group-text">unid.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="container-fluid d-flex flex-row justify-content-between align-items-center">
                                <button type="submit" class="btn btn-submit" id="updateButton">
                                    Atualizar
                                </button>
                                <!-- Modelar o ajax para essa função -->
                                <a href="" class="btn btn-danger" id="remove-button">
                                    Remover
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-criar" tabindex="-2">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <form action="<?= base_url('estoquista/registro_produtos') ?>" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Adicionar produto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row gx-3">
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col">
                                                <label for="modal-name" class="col-form-label">Nome</label>
                                                <input type="text" name="nome_produto" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <label for="modal-price" class="col-form-label">Preço</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">R$</span>
                                                    <input type="number" name="preco_produto" class="form-control" step="0.01" />
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="modal-quantity" class="col-form-label">Quantidade</label>
                                                <div class="input-group">
                                                    <input type="number" name="estoque_produto" class="form-control" />
                                                    <span class="input-group-text">unid.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="container-fluid d-flex flex-row justify-content-center align-items-center">
                                <button type="submit" class="btn btn-submit">
                                    Adicionar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid gap-3 mt-3 mb-3">
            <div class="row row-cols-3 g-3" id="container-row">
            </div>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(buscarProdutos)

        let containerRow = $("#container-row")

        function buscarProdutos() {
            $.ajax({
                url: '<?= base_url('estoquista/pesquisa_produtos') ?>',
                type: "GET",
                dataType: "JSON",
                cache: false,
                success: montarProdutos
            })
        }

        function montarProdutos(data) {
            data.forEach(product => {
                containerRow.append(`
                    <div class="col-xxl">
                        <div class="card">=
                            <div class="card-body">
                                <h5 class="card-title">
                                    ${product.nome_produto}
                                </h5>
                            </div>
                            <div
                                class="card-footer d-flex flex-row justify-content-between"
                            >
                                <p class="mb-0 d-flex align-items-center">
                                    Quantidade: ${product.estoque}
                                </p>
                                <button
                                    type="button"
                                    class="btn btn-light d-flex"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalAtualizacao"
                                    data-image="${product.image}"
                                    data-name="${product.nome_produto}"
                                    data-price="${product.preco}"
                                    data-quantity="${product.estoque}"
                                    data-id="${product.id}"
                                >
                                    <i class="fi fi-rr-menu-dots"></i>
                                </button>
                            </div>
                        </div>
                    </div>`)
            });
        }

        const modalAtualizacao = document.querySelector('#modalAtualizacao')
        const id_produto = document.querySelector('#id_produto')
        const modalCriar = document.querySelector('#modal-criar')
        const removeButton = document.querySelector('#remove-button')
        let modalImage = document.querySelector('#modal-image')
        let modalCriarImage = document.querySelector('#modal-criar-image')
        let modalNameInput = document.querySelector('#modal-name')
        let modalPriceInput = document.querySelector('#modal-price')
        let modalQuantityInput = document.querySelector('#modal-quantity')

        modalAtualizacao.addEventListener('show.bs.modal', ({
            relatedTarget
        }) => {
            let {
                image,
                name,
                price,
                quantity,
                id
            } = relatedTarget.dataset

            modalImage.setAttribute('src', image)
            modalNameInput.value = name
            modalPriceInput.value = price
            modalQuantityInput.value = quantity
            removeButton.setAttribute('href', `<?= base_url('main/remover_produto') ?>/${id}`)
            id_produto.setAttribute('value', `${id}`)
        })

        modalCriar.addEventListener('show.bs.modal', ({
            relatedTarget
        }) => {
            let {
                image
            } = relatedTarget.dataset

            modalCriarImage.setAttribute('src', image)
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="static/js/estoque.js"></script>
</body>

</html>