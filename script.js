document.addEventListener('DOMContentLoaded', () => {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const movieCards = document.querySelectorAll('.movie-card');
    const buttons = document.querySelectorAll('.movie-footer button');

    filterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const selectedFilter = button.dataset.filter;

            filterButtons.forEach((btn) => btn.classList.toggle('active', btn === button));

            movieCards.forEach((card) => {
                const match = selectedFilter === 'all' || card.dataset.category === selectedFilter;
                card.style.display = match ? 'block' : 'none';
            });
        });
    });

    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            const card = button.closest('.movie-card');
            const title = card?.querySelector('h3')?.textContent || 'Movie';
            button.textContent = 'Added';
            button.disabled = true;
            button.style.opacity = '0.8';
            console.log(`${title} added to cart.`);
        });
    });
});
