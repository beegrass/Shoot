const STAR_ROWS = [4, 3, 2, 1];
const STAR_SHAPES = ['★','✶','✸','✦'];
const container = document.getElementById('stars');

function createStar() {
    const star = document.createElement('div');
    star.className = 'star';
    star.textContent = STAR_SHAPES[Math.floor(Math.random() * STAR_SHAPES.length)];
    return star;
}

function createRow(count) {
    const row = document.createElement('div');
    row.className = 'row';
    for (let i = 0; i < count; i++) row.appendChild(createStar());
    container.appendChild(row);
}

function initStars() {
    STAR_ROWS.forEach(createRow);
}

function setupButtons() {
    const buttons = document.querySelectorAll('.buttons button');
    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const align = btn.dataset.align;
            document.querySelectorAll('.row').forEach(row => {
                row.style.justifyContent = align;
            });
        });
    });
}

initStars();
setupButtons();