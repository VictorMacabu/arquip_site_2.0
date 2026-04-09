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

    const input = document.getElementById('input-busca');
    const box = document.getElementById('sugestoes');

    if (!input || !box) return;

    let selectedIndex = -1;

    input.addEventListener('input', async () => {

        const q = input.value.trim();
        selectedIndex = -1;

        if (q.length < 2) {
            box.innerHTML = '';
            box.style.display = 'none';
            return;
        }

        try {
            const res = await fetch(`/pesquisa/autocomplete.php?q=${encodeURIComponent(q)}`);
            const dados = await res.json();

            box.innerHTML = '';

            if (!dados.length) {
                box.style.display = 'none';
                return;
            }

            dados.forEach((item, index) => {

                const div = document.createElement('div');
                div.classList.add('sugestao-item');

                div.innerHTML = `🔍 ${item}`;

                div.addEventListener('click', () => {
                    input.value = item;
                    box.innerHTML = '';
                    input.closest('form').submit();
                });

                box.appendChild(div);
            });

            box.style.display = 'block';

        } catch (e) {
            console.error("Erro autocomplete:", e);
        }

    });

    input.addEventListener('keydown', (e) => {

        const items = box.querySelectorAll('.sugestao-item');
        if (!items.length) return;

        if (e.key === 'ArrowDown') {
            e.preventDefault();
            selectedIndex = (selectedIndex + 1) % items.length;
        }

        if (e.key === 'ArrowUp') {
            e.preventDefault();
            selectedIndex = (selectedIndex - 1 + items.length) % items.length;
        }

        if (e.key === 'Enter') {
            if (selectedIndex >= 0) {
                e.preventDefault();
                items[selectedIndex].click();
            }
        }

        items.forEach((item, index) => {
            item.classList.toggle('active', index === selectedIndex);
        });

    });

    document.addEventListener('click', (e) => {
        if (!e.target.closest('.input-wrapper')) {
            box.style.display = 'none';
        }
    });

});