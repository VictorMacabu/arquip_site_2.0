
// Script dos cards (Estrutura Organizacional)

const cards = document.querySelectorAll('.card-intermediario');
const principal = document.querySelector('.card-principal');

cards.forEach(card => {
  card.addEventListener('click', () => {

    const tituloPrincipal = principal.querySelector('h2');
    const textoPrincipal = principal.querySelector('p');

    const tituloClicado = card.querySelector('h3').innerText;
    const textoClicado = card.querySelector('p').innerText;

    tituloPrincipal.innerText = tituloClicado;
    textoPrincipal.innerText = textoClicado;

  });
});

// Script do autocomplete da barra de busca (Home)

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