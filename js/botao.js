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