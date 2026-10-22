'use strict';

const switcher = document.querySelector('.btn');

if (switcher) {
    switcher.addEventListener('click', function () {
        document.body.classList.toggle('dark-theme');
        document.body.classList.toggle('light-theme');

        if (document.body.classList.contains('dark-theme')) {
            this.textContent = 'Light';
        } else {
            this.textContent = 'Dark';
        }
    });
}
async function buscarCEP(cep) {
try {
const resposta = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
if (!resposta.ok) throw new Error('CEP não encontrado');
const dados = await resposta.json();
document.getElementById('rua').textContent = dados.logradouro;
} catch (erro) {
document.getElementById('mensagem').textContent =
'Não foi possível buscar o CEP.';
}
}