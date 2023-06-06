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
	</head>
	<style>
		.navbar {
			background-color: #f5811e;
		}

		.button-icons::before {
			font-size: 3em;
		}

		.btn-pedido {
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
		<main class="container-xxl mt-5" id="container">
			<div class="row mb-5">
				<div class="card p-0">
					<div class="card-header d-flex flex-row justify-content-between">
						<h6 class="mb-0">Vendido por <strong>José Roberto</strong></h6>
						<h6 class="mb-0">R$ 118,00</h6>
					</div>
					<div class="card-body">
						<h5 class="card-title">Pedido 227</h5>
						<h6 class="card-subtitle text-danger">Aguardando confirmação</h6>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">José Edilson Pereira Silva</li>
						<li class="list-group-item">123.456.789-10</li>
						<li class="list-group-item">Francisco Otaviano, 145</li>
					</ul>
					<div class="card-footer d-flex flex-row justify-content-end">
						<button
							type="button"
							class="btn btn-light btn-pedido"
							data-bs-toggle="modal"
							data-bs-target="#pedido-modal-1"
						>
							Resumo de itens
						</button>
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<div class="card p-0">
					<div class="card-header d-flex flex-row justify-content-between">
						<h6 class="mb-0">Vendido por <strong>José Roberto</strong></h6>
						<h6 class="mb-0">R$ 118,00</h6>
					</div>
					<div class="card-body">
						<h5 class="card-title">Pedido 228</h5>
						<h6 class="card-subtitle text-success">Confirmado</h6>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">José Edilson Pereira Silva</li>
						<li class="list-group-item">123.456.789-10</li>
						<li class="list-group-item">Francisco Otaviano, 145</li>
					</ul>
					<div class="card-footer d-flex flex-row justify-content-end">
						<button
							type="button"
							class="btn btn-light btn-pedido"
							data-bs-toggle="modal"
							data-bs-target="#pedido-modal-2"
						>
							Resumo de itens
						</button>
					</div>
				</div>
			</div>
		</main>
		<!-- Gerar um modal para cada pedido -->
		<div id="pedido-modal-1" class="modal" tabindex="-1">
			<div class="modal-dialog">
				<form action="#" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Pedido 227</h5>
							<button
								type="button"
								class="btn-close"
								data-bs-dismiss="modal"
								aria-label="Close"
							></button>
						</div>
						<div class="modal-body">
							<table class="table table-hover table-bordered align-middle">
								<thead>
									<tr>
										<th scope="col">Nome</th>
										<th scope="col">Quantidade</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											Argamassa AC I Cerâmica Uso Interno Kerakoll Cimentolit
											20Kg
										</td>
										<td class="text-center">1</td>
									</tr>
									<tr>
										<td>
											Argamassa para Assentamento de Porcelanato Interno E
											Externo 20kg Branca
										</td>
										<td class="text-center">2</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="modal-footer justify-content-center">
							<button type="submit" class="btn btn-light btn-pedido">
								Confirmar
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- Se o pedido tiver status confirmado o modal n possui form nem botão de confirmação -->
		<div id="pedido-modal-2" class="modal" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Pedido 227</h5>
						<button
							type="button"
							class="btn-close"
							data-bs-dismiss="modal"
							aria-label="Close"
						></button>
					</div>
					<div class="modal-body">
						<table class="table table-hover table-bordered align-middle">
							<thead>
								<tr>
									<th scope="col">Nome</th>
									<th scope="col">Quantidade</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										Argamassa AC I Cerâmica Uso Interno Kerakoll Cimentolit 20Kg
									</td>
									<td class="text-center">1</td>
								</tr>
								<tr>
									<td>
										Argamassa para Assentamento de Porcelanato Interno E Externo
										20kg Branca
									</td>
									<td class="text-center">2</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
			crossorigin="anonymous"
		></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
		<script>
			$(document).ready(buscarPedidos)

			let container = $("#container")

			function buscarPedidos() {
			    $.ajax({
			        url: '<?= base_url('estoquista/listar_pedidos') ?>',
			        type: "GET",
			        dataType: "JSON",
			        cache: false,
			        success: montarPedidos
			    })
			}

			function montarPedidos(data) {
			    data.forEach((order, index) => {
			        let statusMessage = order.status_pedido_id === "1" ? "Confirmado" : "Aguardando confirmação"
			        let statusTextColor = order.status_pedido_id === "1" ? "text-success" : "text-danger"
			        
			        container.append(`
			            <div class="row mb-5">
			                <div class="card p-0">
			                    <div class="card-header d-flex flex-row justify-content-between">
			                        <h6 class="mb-0">
			                            Vendido por <strong>${order.nome_funcionario}</strong>
			                        </h6>
			                        <h6 class="mb-0">R$ ${order.preco_acordado}</h6>
			                    </div>
			                    <div class="card-body">
			                        <h5 class="card-title">Pedido ${order.id_pedido}</h5>
			                        <h6 class="card-subtitle ${statusTextColor}">
			                            ${statusMessage}
			                        </h6>
			                    </div>
			                    <ul class="list-group list-group-flush">
			                        <li class="list-group-item">
			                            ${order.nome_cliente}
			                        </li>
			                        <li class="list-group-item">${order.cpf}</li>
			                        <li class="list-group-item">${order.endereco}</li>
			                    </ul>
			                    <div class="card-footer d-flex flex-row justify-content-end">
			                        <button type="button" class="btn btn-light btn-pedido" data-bs-toggle="modal" data-bs-target="#pedido-modal-${index}">
			                        Resumo de itens
			                        </button>
			                    </div>
			                </div>
			            </div>
			        `)
			        buscarListaProdutos(order.id, order.status_pedido_id, index)
			    })
			}

			
            function buscarListaProdutos(id, status, index) {
                $.ajax({
			        url: "<?=base_url('estoquista/historico_de_venda')?>",
			        type: "POST",
			        dataType: "JSON",
					cache: false,
			        data: {id},
			        success: (data) => {
                        montarModalProdutos(data, id, status, index)
                    }
			    });
            }
            function montarModalProdutos(data, id, status, index){
                let modalBody = '';
			    data.forEach(produto => {
                                modalBody += `
                                    <tr>
                                        <td>
                                            ${produto.nome_produto}
                                        </td>
                                        <td class="text-center">${produto.quantidade_comprada}</td>
                                    </tr>
                                `
                            })
		        let modalFooter = status === "1" ? "" : waitingOrderModalFooter();
			    $(document.body).append(`
			            <div id="pedido-modal-${index}" class="modal" tabindex="-${index}">
			                <div class="modal-dialog">
			                    <form action="<?=base_url('estoquista/confirmar_pedido/')?>${id}" method="post">
			                        <div class="modal-content">
			                            <div class="modal-header">
			                                <h5 class="modal-title">Pedido ${id}</h5>
			                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			                            </div>
			                            <div class="modal-body">
			                                <table class="table table-hover table-bordered align-middle">
			                                    <thead>
			                                        <tr>
			                                            <th scope="col">Nome</th>
			                                            <th scope="col">Quantidade</th>
			                                        </tr>
			                                    </thead>
			                                    <tbody>
			                                        ${modalBody}
			                                    </tbody>
			                                </table>
			                            </div>
			                            ${modalFooter}
			                        </div>
			                    </form>
			                </div>
			            </div>
			        `)
			}
            function waitingOrderModalFooter() {
                return `
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-light btn-pedido">
                            Confirmar
                        </button>
                    </div>
                `
            }
		</script>
	</body>
</html>
