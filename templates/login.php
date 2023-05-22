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
        <link rel="stylesheet" href="../static/login.css" />
    </head>
    <body>
        <div class="container-sm vh-100 py-3">
            <div
                class="container-sm d-flex rounded pt-5 shadow h-100 flex-column justify-content-around screen-box"
            >
                <h1 class="text-uppercase fs-3 text-center">Login</h1>
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuário</label>
                        <input
                            type="text"
                            class="form-control is-invalid"
                            id="username"
                            placeholder="nome-de-usuario"
                        />
                        <div class="invalid-feedback">
                            Verifique o usuário e senha
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="password" class="form-label">Senha</label>
                        <input
                            type="password"
                            id="password"
                            class="form-control"
                        />
                    </div>
                    <div class="mb-3 d-flex flex-row justify-content-center">
                        <button type="submit" class="btn btn-warning">
                            Entrar
                        </button>
                    </div>
                </form>
                <div class="container d-flex flex-row justify-content-center">
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

