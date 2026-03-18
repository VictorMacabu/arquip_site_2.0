/*
const menuItems = document.querySelectorAll('.navegacao-item');

menuItems.forEach(item => {
    const button = item.querySelector('.navegacao-botao');

    button.addEventListener('click', (e) => {
        e.stopPropagation();

        // Fecha todos os outros
        menuItems.forEach(i => {
            if (i !== item) {
                i.classList.remove('active');
            }
        });

        // Alterna o atual
        item.classList.toggle('active');
    });
});

// Fecha ao clicar fora
document.addEventListener('click', () => {
    menuItems.forEach(item => {
        item.classList.remove('active');
    });
});
*/

document.addEventListener('DOMContentLoaded', () => {

    const input = document.querySelector('input[name="q"]');
    const box = document.getElementById('sugestoes');

    if (!input) return;

    input.addEventListener('input', async () => {
        const q = input.value;

        if (q.length < 2) {
            box.innerHTML = '';
            return;
        }

        const res = await fetch(`/pesquisa/autocomplete.php?q=${q}`);
        const dados = await res.json();

        box.innerHTML = '';

        dados.forEach(item => {
            const div = document.createElement('div');
            div.classList.add('sugestao-item');
            div.textContent = item.termo;

            div.onclick = () => {
                input.value = item.termo;
                box.innerHTML = '';
            };

            box.appendChild(div);
        });
    });

});