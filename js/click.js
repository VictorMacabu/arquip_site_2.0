document.querySelectorAll('.navegacao-botao').forEach(botao => {
    botao.addEventListener('click', function(e) {
        // Previne que o link siga para outra página se for o caso
        e.preventDefault();
        
        const itemPai = this.parentElement;

        // Se clicar no que já está aberto, ele fecha
        if (itemPai.classList.contains('menu-ativo')) {
            itemPai.classList.remove('menu-ativo');
        } else {
            // Fecha outros menus que possam estar abertos
            document.querySelectorAll('.navegacao-item').forEach(item => {
                item.classList.remove('menu-ativo');
            });
            // Abre o atual
            itemPai.classList.add('menu-ativo');
        }
    });
});

// Fechar o menu se clicar em qualquer lugar fora dele
document.addEventListener('click', function(e) {
    if (!e.target.closest('.navegacao-item')) {
        document.querySelectorAll('.navegacao-item').forEach(item => {
            item.classList.remove('menu-ativo');
        });
    }
});


/* ====== NOVO: Fechar ao usar o Scroll ====== */
window.addEventListener('scroll', function() {
    // Busca todos os itens que estão com o menu aberto
    const menusAbertos = document.querySelectorAll('.navegacao-item.menu-ativo');
    
    // Se houver algum menu aberto, remove a classe ao rolar
    menusAbertos.forEach(item => {
        item.classList.remove('menu-ativo');
    });
}, { passive: true });



document.addEventListener('click', function(e) {
    if (!e.target.closest('.navegacao-item')) {
        document.querySelectorAll('.navegacao-item').forEach(item => {
            item.classList.remove('menu-ativo');
        });
    }
});