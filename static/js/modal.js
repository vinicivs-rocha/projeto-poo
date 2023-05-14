const modal = document.querySelector('#modalAtualizacao')
const removeButton = document.querySelector('#remove-button')
let modalImage = document.querySelector('#modal-image')
let modalNameInput = document.querySelector('#modal-name')
let modalPriceInput = document.querySelector('#modal-price')
let modalQuantityInput = document.querySelector('#modal-quantity')

modal.addEventListener('show.bs.modal', ({ relatedTarget }) => {
    let { image, name, price, quantity, id } = relatedTarget.dataset

    modalImage.setAttribute('src', image)
    modalNameInput.value = name
    modalPriceInput.value = price
    modalQuantityInput.value = quantity
    removeButton.setAttribute('href', `url/${id}`)
})

