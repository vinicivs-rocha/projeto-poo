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
                        <span class="mt-3">Tela inicial</span>
                    </button>
                </a>
            </div>
        </header>
        <main>
            <div class="container mt-5 ">
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
                <div class="row mt-3 justify-content-between">
                    <div class="col-1">
                        <img src="../static/images/produto-1.png" alt="Produto 1" class="img-fluid">
                    </div>
                    <div class="col-2">
                        <p class="text-center mb-0">Argamassa para Assentamento de Porcelanato Interno E Externo 20kg Branca</p>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <p class="mb-0 text-center fs-4">1</p>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <p class="mb-0 text-center fs-4">R$ 22,50</p>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <p class="mb-0 text-center fs-4">R$ 22,50</p>
                    </div>
                </div>
                <div class="row mt-3 justify-content-between">
                    <div class="col-1">
                        <img src="../static/images/produto-1.png" alt="Produto 1" class="img-fluid">
                    </div>
                    <div class="col-2">
                        <p class="text-center mb-0">Argamassa para Assentamento de Porcelanato Interno E Externo 20kg Branca</p>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <p class="mb-0 text-center fs-4">3</p>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <p class="mb-0 text-center fs-4">R$ 22,50</p>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <p class="mb-0 text-center fs-4">R$ 67,50</p>
                    </div>
                </div>
                <div class="row mt-5 justify-content-between">
                    <div class="col-4">
                        <h5 class="h5 text-center">Dados do cliente</h6>
                        <p class="fs-5">Nome: José Edilson</p>
                        <p class="fs-5">Email: josesilva@gmail.com</p>
                        <p class="fs-5">Endereço: Francisco Otaviano, 245</p>
                        <p class="fs-5">Telefone: 81999999999</p>
                    </div>
                    <div class="col-4 d-flex flex-column justify-content-around align-items-center">
                        <p class="fs-5">Vendedor: José Roberto</p>
                        <form action="/pedido/finalizar" method="post">
                            <button type="submit" class="btn btn-light bg-orange">Finalizar pedido</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>

