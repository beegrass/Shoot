function initComparisons() {
    var x, i;
    x = document.getElementsByClassName("without");
    for (i = 0; i < x.length; i++) {
        compareBackgrounds(x[i]);
}
function compareBackgrounds(bg) {
    var slider, bg, clicked = 0, w, h;

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

        if (clicked == 0) {
            return false;
        }

        pos = getCursorPos(e)

        if (pos < 0) {
            pos = 0;
        }
    
        if (pos > w) {
            pos = w;
        }

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
}

window.onload = initComparisons;
