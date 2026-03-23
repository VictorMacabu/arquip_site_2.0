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

    const input = document.querySelector('.input-wrapper input');
    const box = document.getElementById('sugestoes');

    if (!input || !box) return;

    input.addEventListener('input', async () => {
        const q = input.value;

        if (q.length < 2) {
            box.innerHTML = '';
            return;
        }

        try {
            const res = await fetch(`/pesquisa/autocomplete.php?q=${q}`);
            const dados = await res.json();

            box.innerHTML = '';

            dados.forEach(item => {
                const div = document.createElement('div');
                div.classList.add('sugestao-item');
                div.textContent = item;

                div.onclick = () => {
                    input.value = item;
                    box.innerHTML = '';
                    input.closest('form').submit();
                };

                box.appendChild(div);
            });

        } catch (e) {
            console.error("Erro autocomplete:", e);
        }
    });

});