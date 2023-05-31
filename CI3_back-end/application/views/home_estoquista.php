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
        <link rel="stylesheet" href="../static/home_vendedor.css" />
    </head>
    <body>
        <div class="container-sm vh-100 py-3">
            <div
                class="container-sm d-flex rounded p-5 shadow h-100 flex-column justify-content-around screen-box"
            >
                <div class="row">
                    <h1 class="text-uppercase fs-3 text-center">Estoquista</h1>
                </div>
                <div
                    class="row d-flex flex-row justify-content-center align-items-center gx-5"
                >
                    <div class="col-5">
                        <a href="<?=base_url('main/carregar_estoque')?>" class="btn btn-light shadow w-100 p-3">
                            <i class="fi fi-rr-warehouse-alt"></i>
                            <p class="mb-0 mt-3 text-capitalize">Estoque</p>
                        </a>
                    </div>
                    <div class="col-5">
                        <a href="<?base_url('main/pedidos')?>" class="btn btn-light shadow w-100 p-3">
                            <i class="fi fi-rr-cart-arrow-down"></i>
                            <p class="mb-0 mt-3 text-capitalize">
                                pedidos em aberto
                            </p>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <img
                        src="../static/images/WQPGBIIWQGBFWPGQBFIWIBQIGFB 2.svg"
                        alt="Logomarca da Empresa"
                        class="w-100"
                    />
                </div>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

