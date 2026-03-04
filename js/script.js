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
