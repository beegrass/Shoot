// CONTRAST
function initComparisons() {
    // Gets all alements container specified class
    const desktopImages = document.querySelectorAll('.desktop-image');
    const middleImages = document.querySelectorAll('.middle-image');
    const mobileImages = document.querySelectorAll('.mobile-image');
    // Checks width of screen to determine image sizes - hides/display appropriate images based on their class
    if (window.innerWidth < 575) {
        for (let i = 0; i < desktopImages.length; i++) {
            desktopImages[i].style.display = 'none';
            middleImages[i].style.display = 'none';
            mobileImages[i].style.display = 'block';
        }
    } 
    else if (window.innerWidth < 855 && window.innerWidth > 575) {
        for (let i = 0; i < desktopImages.length; i++) {
            desktopImages[i].style.display = 'none';
            middleImages[i].style.display = 'block';
            mobileImages[i].style.display = 'none';
        }
    } else {
        for (let i = 0; i < desktopImages.length; i++) {
            desktopImages[i].style.display = 'block';
            middleImages[i].style.display = 'none';
            mobileImages[i].style.display = 'none';
        }
    }
    // Gets the image within the container with a "without class" - slider will be attached to the left side of the image
    let x = document.getElementsByClassName("without");
    for (let i = 0; i < x.length; i++) {
        compareBackgrounds(x[i]);
    }
}

function compareBackgrounds(bg) {
    var slider, clicked = 0, w, h;
    // Width and height based off of the container element
    w = bg.parentElement.offsetWidth;
    h = bg.parentElement.offsetHeight;
    bg.style.width = (w / 2) + "px";
    // Checks if a slider has already been created and removes it if it has
    const existingSlider = bg.parentElement.querySelector('.slider');
    if (existingSlider) {
        existingSlider.remove();
    } 
    // Creates slider
    slider = document.createElement("DIV");
    slider.setAttribute("class", "slider");
    bg.parentElement.insertBefore(slider, bg);
    //Determines position of slider
    slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
    slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
    // Listeners that will execute functions based on event
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
        // Doesn't move if not being clicked (i.e., mouseup)
        if (clicked === 0){
            return false;
        }
        pos = getCursorPos(e);
        // Makes sure position is within bounds
        if (pos < 0) {
            pos = 0;
        }
        if (pos > w) {
            pos = w;
        }
        slide(pos);
    }

    function getCursorPos(e) {
        // Function getting cursors current position
        var a, x = 0;
        e = (e.changedTouches) ? e.changedTouches[0] : e;
        a = bg.getBoundingClientRect();
        x = e.pageX - a.left;
        x = x - window.pageXOffset;
        return x;
    }

    function slide(x) {
        // Changes position of slider
        bg.style.width = x + "px";
        slider.style.left = bg.offsetWidth - (slider.offsetWidth / 2) + "px";
    }
}

window.addEventListener('load', initComparisons);
window.addEventListener('resize', initComparisons);

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
