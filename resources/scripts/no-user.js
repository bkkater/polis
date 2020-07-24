const masks = {
    cpf(value) {
        return value
            .replace(/\D/g, '')
            .replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d)/, '$1-$2')

            .replace(/(-\d{2})\d+?$/, '$1')
    }
}

const input = document.getElementById('cpf');
const inputCadastro = document.getElementById('cpf-cadastro')
const field = input.dataset.js

input.addEventListener('input', (e) => { e.target.value = masks[field](e.target.value) })
inputCadastro.addEventListener('input', (e) => { e.target.value = masks[field](e.target.value) })

//fechando o modal
const closeButton = document.getElementById('close');
const closeAcesso = document.getElementById('close-acesso');

const modal = document.getElementById('modal');
const modalAcesso = document.getElementById('dif-modal')

closeButton.addEventListener('click', () =>{
    modal.classList.remove('mostrar');
})

closeAcesso.addEventListener('click', () =>{
    modalAcesso.classList.remove('mostrar');
})

const registerButton = document.getElementById('register');
const acessButton = document.getElementById('acess');

registerButton.addEventListener('click', ()=>{
    modal.classList.add('mostrar');
})
acessButton.addEventListener('click', ()=>{
    modalAcesso.classList.add('mostrar');
})
