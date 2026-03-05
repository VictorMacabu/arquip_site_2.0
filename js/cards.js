const track = document.querySelector('.track');
const cards = Array.from(document.querySelectorAll('.card'));
const nextBtn = document.querySelector('.direita');
const prevBtn = document.querySelector('.esquerda');

let index = 0;
const total = cards.length;

// Largura fixa do card + margem
const cardWidth = cards[0].offsetWidth + 20;

// Sempre queremos 3 cards visíveis
const cardsVisiveis = 3;
const maxIndex = total - cardsVisiveis;

function atualizarCarrossel() {
    track.style.transform = `translateX(-${index * cardWidth}px)`;
}

nextBtn.addEventListener('click', () => {
    index++;
    if (index > maxIndex) {
        index = 0;
    }
    atualizarCarrossel();
});

prevBtn.addEventListener('click', () => {
    index--;
    if (index < 0) {
        index = maxIndex;
    }
    atualizarCarrossel();
});

atualizarCarrossel();