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
        <link rel="stylesheet" href="../static/estoque.css" />
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expend-xxl shadow-sm">
                <div class="container-fluid flex-row justify-content-center">
                    <div class="navbar-nav row flex-row">
                        <div
                            class="nav-item col d-flex flex-column justify-content-center"
                        >
                            <i class="fi fi-rr-user d-flex"></i>
                        </div>
                        <div class="nav-item col">
                            <p class="nav-link mb-0">Estoque</p>
                        </div>
                    </div>
                </div>
            </nav>
            <div
                class="container-fluid mt-3 d-flex flex-row justify-content-between"
            >
                <a href="#" class="text-decoration-none">
                    <button
                        type="button"
                        class="btn btn-light d-flex flex-column align-items-center shadow-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#modal-criar"
                        data-image="
                        "
                    >
                        <i class="fi fi-rr-boxes button-icons"></i>
                        Atualizar estoque
                    </button>
                </a>
                <a href="#" class="text-decoration-none">
                    <button
                        type="button"
                        class="btn btn-light d-flex flex-column align-items-center shadow-sm"
                    >
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
                        <form method="post">
                            <input type="number" name="id_produto" id="modal-id" class="d-none">
                            <div class="modal-header">
                                <h5 class="modal-title">Atualizar produto</h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row gx-3">
                                        <div
                                            class="col-4 d-flex flex-column align-items-center"
                                        >
                                            <label
                                                for="imagem-produto"
                                                class="col-form-label"
                                                >Imagem do produto</label
                                            >
                                            <img
                                                src=""
                                                alt="Imagem do produto"
                                                id="modal-image"
                                                class="img-fluid mb-3"
                                            />
                                            <input
                                                type="file"
                                                class="form-control"
                                                id="imagem-produto"
                                                name="image"
                                            />
                                        </div>
                                        <div class="col-8">
                                            <div class="row">
                                                <div class="col">
                                                    <label
                                                        for="modal-name"
                                                        class="col-form-label"
                                                        >Nome</label
                                                    >
                                                    <input
                                                        type="text"
                                                        name="name"
                                                        id="modal-name"
                                                        class="form-control"
                                                    />
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-6">
                                                    <label
                                                        for="modal-price"
                                                        class="col-form-label"
                                                        >Preço</label
                                                    >
                                                    <div class="input-group">
                                                        <span
                                                            class="input-group-text"
                                                            >R$</span
                                                        >
                                                        <input
                                                            type="number"
                                                            name="price"
                                                            id="modal-price"
                                                            class="form-control"
                                                            step="0.01"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label
                                                        for="modal-quantity"
                                                        class="col-form-label"
                                                        >Quantidade</label
                                                    >
                                                    <div class="input-group">
                                                        <input
                                                            type="number"
                                                            name="quantity"
                                                            id="modal-quantity"
                                                            class="form-control"
                                                        />
                                                        <span
                                                            class="input-group-text"
                                                            >unid.</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div
                                    class="container-fluid d-flex flex-row justify-content-between align-items-center"
                                >
                                    <button
                                        type="submit"
                                        class="btn btn-submit"
                                    >
                                        Atualizar
                                    </button>
                                    <a
                                        href=""
                                        class="btn btn-danger"
                                        id="remove-button"
                                    >
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
                        <form action="#" method="post">
                            <div class="modal-header">
                                <h5 class="modal-title">Adicionar produto</h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row gx-3">
                                        <div
                                            class="col-4 d-flex flex-column align-items-center"
                                        >
                                            <label
                                                for="imagem-produto"
                                                class="col-form-label"
                                                >Imagem do produto</label
                                            >
                                            <img
                                                src=""
                                                alt="Imagem do produto"
                                                id="modal-criar-image"
                                                class="img-fluid mb-3"
                                            />
                                            <input
                                                type="file"
                                                class="form-control"
                                                name="image"
                                            />
                                        </div>
                                        <div class="col-8">
                                            <div class="row">
                                                <div class="col">
                                                    <label
                                                        for="modal-name"
                                                        class="col-form-label"
                                                        >Nome</label
                                                    >
                                                    <input
                                                        type="text"
                                                        name="name"
                                                        class="form-control"
                                                    />
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-6">
                                                    <label
                                                        for="modal-price"
                                                        class="col-form-label"
                                                        >Preço</label
                                                    >
                                                    <div class="input-group">
                                                        <span
                                                            class="input-group-text"
                                                            >R$</span
                                                        >
                                                        <input
                                                            type="number"
                                                            name="price"
                                                            class="form-control"
                                                            step="0.01"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label
                                                        for="modal-quantity"
                                                        class="col-form-label"
                                                        >Quantidade</label
                                                    >
                                                    <div class="input-group">
                                                        <input
                                                            type="number"
                                                            name="quantity"
                                                            class="form-control"
                                                        />
                                                        <span
                                                            class="input-group-text"
                                                            >unid.</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div
                                    class="container-fluid d-flex flex-row justify-content-center align-items-center"
                                >
                                    <button
                                        type="submit"
                                        class="btn btn-submit"
                                    >
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container-fluid gap-3 mt-3 mb-3">
                <div class="row row-cols-3" id="container-row">
                    <div class="col-xxl">
                        <div class="card">
                            <img
                                src="../static/images/produto-1.png"
                                alt="imagem-produto-1"
                            />
                            <div class="card-body">
                                <h5 class="card-title">
                                    Argamassa AC I Cerâmica Uso Interno Kerakoll
                                    Cimentolit 20Kg
                                </h5>
                            </div>
                            <div
                                class="card-footer d-flex flex-row justify-content-between"
                            >
                                <p class="mb-0 d-flex align-items-center">
                                    Quantidade: 80
                                </p>
                                <button
                                    type="button"
                                    class="btn btn-light d-flex"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalAtualizacao"
                                    data-image="../static/images/produto-1.png"
                                    data-name="Argamassa AC I Cerâmica Uso Interno Kerakoll Cimentolit 20Kg"
                                    data-price="120.00"
                                    data-quantity="80"
                                    data-id="1"
                                >
                                    <i class="fi fi-rr-menu-dots"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
            $(document).ready(buscarProdutos)

            let containerRow = $("#container-row")

            function buscarProdutos() {
                $.ajax({
                    url: '',
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
                        <div class="card">
                            <img
                                src="${product.image}"
                                alt="imagem-produto-1"
                            />
                            <div class="card-body">
                                <h5 class="card-title">
                                    ${product.name}
                                </h5>
                            </div>
                            <div
                                class="card-footer d-flex flex-row justify-content-between"
                            >
                                <p class="mb-0 d-flex align-items-center">
                                    Quantidade: ${product.quantity}
                                </p>
                                <button
                                    type="button"
                                    class="btn btn-light d-flex"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalAtualizacao"
                                    data-image="${product.image}"
                                    data-name="${product.name}"
                                    data-price="${product.price}"
                                    data-quantity="${product.quantity}"
                                    data-id="${product.id}"
                                >
                                    <i class="fi fi-rr-menu-dots"></i>
                                </button>
                            </div>
                        </div>
                    </div>`)
                });
            }
        </script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"
        ></script>
        <script src="../static/js/estoque.js"></script>
    </body>
</html>

