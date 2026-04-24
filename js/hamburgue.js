const btn = document.getElementById('btnHamburguer');
const nav = document.querySelector('.navegacao');
const overlay = document.getElementById('overlay');

let aberto = false;

function abrirMenu() {
    aberto = true;
    btn.classList.add('ativo');
    nav.classList.add('ativo');
    overlay.classList.add('ativo');
}

function fecharMenu() {
    aberto = false;
    btn.classList.remove('ativo');
    nav.classList.remove('ativo');
    overlay.classList.remove('ativo');
}

btn.addEventListener('click', () => {
    aberto ? fecharMenu() : abrirMenu();
});

overlay.addEventListener('click', fecharMenu);

/* ====== Submenu Mobile ====== */
document.querySelectorAll('.navegacao-item').forEach(item => {
    const botao = item.querySelector('.navegacao-botao');

    botao.addEventListener('click', (e) => {
        e.preventDefault();
        item.classList.toggle('ativo');
    });
});