/* ====== Diário Oficial ====== */
const botoes = document.querySelectorAll('.vantagens-publicador_cidadao button');
const imagem = document.getElementById('imagem-vantagens');

botoes.forEach(botao => {
  botao.addEventListener('click', () => {
    // Remove classe ativo de todos os botões
    botoes.forEach(b => b.classList.remove('ativo'));

    // Adiciona classe ativo ao clicado
    botao.classList.add('ativo');

    // Troca a imagem pelo valor do data-img
    const novaImg = botao.getAttribute('data-img');
    imagem.src = novaImg;
  });
});


/* ====== Política de Gestão Documental ====== */
document.addEventListener("click", function (event) {
    const allDetails = document.querySelectorAll("details");

    allDetails.forEach(details => {
        // se clicou fora do details que está aberto
        if (details.open && !details.contains(event.target)) {
            details.removeAttribute("open");
        }
    });
});


/* ====== Legislação (Política de Gestão Documental) ====== */
const tabs = document.querySelectorAll(".tab");
const contents = document.querySelectorAll(".content");

tabs.forEach(tab => {
  tab.addEventListener("click", () => {

    // remove ativo dos botões
    tabs.forEach(t => t.classList.remove("active"));

    // remove conteúdo ativo
    contents.forEach(c => c.classList.remove("active"));

    // ativa botão clicado
    tab.classList.add("active");

    // mostra conteúdo correspondente
    document.getElementById(tab.dataset.tab).classList.add("active");
  });
});