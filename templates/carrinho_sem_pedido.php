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
        <link rel="stylesheet" href="../static/vendedor.css" />
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
                <a href="./vendedor.php" class="text-decoration-none">
                    <button
                        type="button"
                        class="btn btn-light d-flex flex-column align-items-center shadow"
                    >
                        <i class="fi fi-rr-arrow-left header-fi"></i>
                        <span class="mt-3">Tela do vendedor</span>
                    </button>
                </a>
            </div>
        </header>
        <main>
            <div class="container d-flex flex-column align-items-center">
                <p class="display-1 text-center mb-5">Nenhum pedido aberto</p>
                <button
                    type="button"
                    class="btn btn-lg btn-light bg-orange"
                    data-bs-toggle="modal"
                    data-bs-target="#open-demand-modal"
                >
                    Abrir pedido
                </button>
            </div>
            <div class="modal" id="open-demand-modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Criar pedido</h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <form action="/pedido/criar" method="post">
                            <div class="modal-body">
                                <label for="client-cpf" class="form-label"
                                    >CPF do cliente:</label
                                >
                                <input
                                    class="form-control"
                                    list="client-cpf-options"
                                    id="client-cpf"
                                />
                                <datalist id="client-cpf-options">
                                    <option value="123.456.789-10"></option>
                                    <option value="111.222.333-44"></option>
                                </datalist>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-light bg-orange">
                                    Abrir pedido
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

