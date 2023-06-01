const modalAtualizacao = document.querySelector('#modalAtualizacao')
const modalCriar = document.querySelector('#modal-criar')
const removeButton = document.querySelector('#remove-button')
let modalImage = document.querySelector('#modal-image')
let modalCriarImage = document.querySelector('#modal-criar-image')
let modalNameInput = document.querySelector('#modal-name')
let modalPriceInput = document.querySelector('#modal-price')
let modalQuantityInput = document.querySelector('#modal-quantity')
let modalIdInput = document.querySelector("#modal-id")

modalAtualizacao.addEventListener('show.bs.modal', ({ relatedTarget }) => {
    let { image, name, price, quantity, id } = relatedTarget.dataset

    modalImage.setAttribute('src', image)
    modalNameInput.value = name
    modalPriceInput.value = price
    modalQuantityInput.value = quantity
    modalIdInput.value = id
})

modalCriar.addEventListener('show.bs.modal', ({ relatedTarget }) => {
    let { image } = relatedTarget.dataset

    modalCriarImage.setAttribute('src', image)
})

