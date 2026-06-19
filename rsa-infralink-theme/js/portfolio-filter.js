document.addEventListener('DOMContentLoaded', () => {
  const filterButtons = document.querySelectorAll('.filter-btn');
  const portfolioCards = document.querySelectorAll('.portfolio-card-custom');

  if (filterButtons.length === 0 || portfolioCards.length === 0) return;

  // Estado atual dos filtros ativos
  const activeFilters = {
    state: 'all',
    category: 'all'
  };

  filterButtons.forEach(button => {
    button.addEventListener('click', (e) => {
      e.preventDefault();
      
      const filterType = button.getAttribute('data-filter-type'); // 'state' ou 'category'
      const filterValue = button.getAttribute('data-filter-value'); // 'rs', 'sc', 'pr', 'fibra', 'all', etc.

      if (!filterType || !filterValue) return;

      // 1. Remove classe 'active' apenas dos botões do mesmo tipo de filtro
      document.querySelectorAll(`.filter-btn[data-filter-type="${filterType}"]`).forEach(btn => {
        btn.classList.remove('active');
      });

      // 2. Adiciona classe 'active' ao botão clicado
      button.classList.add('active');

      // 3. Atualiza o estado dos filtros
      activeFilters[filterType] = filterValue;

      // 4. Aplica os filtros combinados nos cards
      applyFilters();
    });
  });

  function applyFilters() {
    portfolioCards.forEach(card => {
      const cardState = card.getAttribute('data-state');
      const cardCategory = card.getAttribute('data-category');

      // Verifica se o card atende ao filtro de Estado
      const matchState = (activeFilters.state === 'all' || cardState === activeFilters.state);
      
      // Verifica se o card atende ao filtro de Categoria
      const matchCategory = (activeFilters.category === 'all' || cardCategory === activeFilters.category);

      // Exibe se atender a ambos, senão esconde
      if (matchState && matchCategory) {
        card.classList.remove('hidden');
        // Adiciona um pequeno efeito fade-in por transição CSS se necessário
        card.style.opacity = '0';
        setTimeout(() => {
          card.style.opacity = '1';
          card.style.transition = 'opacity 0.25s ease-in-out';
        }, 10);
      } else {
        card.classList.add('hidden');
      }
    });
  }
});
