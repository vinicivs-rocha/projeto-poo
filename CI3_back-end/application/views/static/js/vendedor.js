const addProductModal = document.querySelector('#add-product-modal')
const modalNameInput = document.querySelector('#name')
const modalPriceInput = document.querySelector('#price')

addProductModal.addEventListener('shown.bs.modal', ({ relatedTarget }) => {
    modalNameInput.value = relatedTarget.dataset.name
    modalPriceInput.value = relatedTarget.dataset.price
})

