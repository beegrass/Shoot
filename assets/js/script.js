// CONTRAST
function initComparisons() {
    var x, i;
    x = document.getElementsByClassName("without");
    for (i = 0; i < x.length; i++) {
        compareBackgrounds(x[i]);
    }
}

function compareBackgrounds(bg) {
    var slider, clicked = 0, w, h;
    w = bg.offsetWidth;
    h = bg.offsetHeight;
    bg.style.width = (w / 2) + "px";
    slider = document.createElement("DIV");
    slider.setAttribute("class", "slider");
    bg.parentElement.insertBefore(slider, bg);
    slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
    slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
    slider.addEventListener("mousedown", slideReady);
    window.addEventListener("mouseup", slideFinish);
    
    function slideReady(e) {
        e.preventDefault();
        clicked = 1;
        window.addEventListener("mousemove", slideMove);
    }

    function slideFinish() {
        clicked = 0;
    }

    function slideMove(e) {
        var pos;
        if (clicked === 0) return false;
        pos = getCursorPos(e);
        if (pos < 0) pos = 0;
        if (pos > w) pos = w;
        slide(pos);
    }

    function getCursorPos(e) {
        var a, x = 0;
        e = (e.changedTouches) ? e.changedTouches[0] : e;
        a = bg.getBoundingClientRect();
        x = e.pageX - a.left;
        x = x - window.pageXOffset;
        return x;
    }

    function slide(x) {
        bg.style.width = x + "px";
        slider.style.left = bg.offsetWidth - (slider.offsetWidth / 2) + "px";
    }
}

// ALIGNMENT
const STAR_ROWS = [4, 3, 2, 1];
const STAR_SHAPES = ['★','✶','✸','✦'];

document.addEventListener("DOMContentLoaded", function () {
    initComparisons();

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
        for (let i = 0; i < count; i++) {
            row.appendChild(createStar());
        }
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
});
