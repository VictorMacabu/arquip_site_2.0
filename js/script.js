
// Script dos cards (Estrutura Organizacional)

const container = document.querySelector('.cards-pacote');

container.addEventListener('click', (e) => {
    const clicado = e.target.closest('.card-intermediario');
    if (!clicado) return;

    const principal = document.querySelector('.card-principal');
    const lateral = document.querySelector('.cards-lateral');

    const cards = document.querySelectorAll('.card-decreto');


    const first = [];
    cards.forEach(card => {
        first.push(card.getBoundingClientRect());
    });


    lateral.appendChild(principal);
    container.prepend(clicado);

    principal.classList.replace('card-principal', 'card-intermediario');
    clicado.classList.replace('card-intermediario', 'card-principal');


    const last = [];
    const newCards = document.querySelectorAll('.card-decreto');

    newCards.forEach(card => {
        last.push(card.getBoundingClientRect());
    });


    newCards.forEach((card, i) => {
        const dx = first[i].left - last[i].left;
        const dy = first[i].top - last[i].top;

        card.style.transform = `translate(${dx}px, ${dy}px)`;

        requestAnimationFrame(() => {
            card.style.transition = 'transform 0.4s ease';
            card.style.transform = '';
        });
    });
});

// Script do Organograma (Estrutura Organizacional)

const organograma = document.querySelector('.organograma-arquip');
const svg = document.querySelector('.org-linhas');

let organogramaAnimado = false;

const conexoes = [
  ["topo", "coord"],
  ["coord", "didoc"],
  ["coord", "disamsp"],

  ["didoc", "dir-didoc"],
  ["dir-didoc", "nunorm"],
  ["dir-didoc", "nusist"],
  ["dir-didoc", "nuori"],
  ["dir-didoc", "nupubli"],

  ["disamsp", "dir-disamsp"],
  ["dir-disamsp", "nupen"],
  ["dir-disamsp", "nuadi"],
  ["dir-disamsp", "nupres"],
  ["dir-disamsp", "nuava"]
];

let paths = [];

function criarLinhas() {
  svg.innerHTML = "";
  paths = [];

  conexoes.forEach(() => {
    const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
    path.classList.add("linha");
    svg.appendChild(path);
    paths.push(path);
  });
}

function conectar(el1, el2, path) {
  const r1 = el1.getBoundingClientRect();
  const r2 = el2.getBoundingClientRect();
  const container = organograma.getBoundingClientRect();

  const x1 = r1.left + r1.width / 2 - container.left;
  const y1 = r1.bottom - container.top;

  const x2 = r2.left + r2.width / 2 - container.left;
  const y2 = r2.top - container.top;

  const distancia = Math.max(40, (y2 - y1) / 2);

  const d = `
    M ${x1} ${y1}
    C ${x1} ${y1 + distancia},
      ${x2} ${y2 - distancia},
      ${x2} ${y2}
  `;

  path.setAttribute("d", d);
}

function desenharLinhas() {
  conexoes.forEach(([origem, destino], index) => {
    const el1 = document.querySelector(`[data-node="${origem}"]`);
    const el2 = document.querySelector(`[data-node="${destino}"]`);

    if (!el1 || !el2 || !paths[index]) return;

    conectar(el1, el2, paths[index]);
  });
}

function animarLinhas() {
  paths.forEach((path, index) => {
    path.classList.remove("ativa");

    setTimeout(() => {
      path.classList.add("ativa");
    }, index * 120);
  });
}

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting && !organogramaAnimado) {
      organogramaAnimado = true;

      setTimeout(() => {
        criarLinhas();
        desenharLinhas();
        animarLinhas();
      }, 500);
    }
  });
}, {
  threshold: 0.35
});

observer.observe(organograma);

window.addEventListener("resize", () => {
  if (!organogramaAnimado) return;
  desenharLinhas();
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