const container = document.getElementById('star-container');
const stars = container.querySelectorAll('.star-prox');

function scatterStars() {
  const containerWidth = container.offsetWidth;
  const containerHeight = container.offsetHeight;

  stars.forEach(star => {
    const x = Math.random() * (containerWidth - 30);
    const y = Math.random() * (containerHeight - 30);
    star.style.left = `${x}px`;
    star.style.top = `${y}px`;
  });
}

function groupStars() {
  const containerWidth = container.offsetWidth;
  const containerHeight = container.offsetHeight;
  const centerLeft = { x: containerWidth * 0.25, y: containerHeight * 0.5 };
  const centerRight = { x: containerWidth * 0.75, y: containerHeight * 0.5 };
  const radius = 50;

  let aIndex = 0;
  let bIndex = 0;

  stars.forEach(star => {
    let angle, x, y;

    if (star.classList.contains('group-a')) {
      angle = (2 * Math.PI / 5) * aIndex;
      x = centerLeft.x + radius * Math.cos(angle);
      y = centerLeft.y + radius * Math.sin(angle);
      aIndex++;
    } else {
      angle = (2 * Math.PI / 5) * bIndex;
      x = centerRight.x + radius * Math.cos(angle);
      y = centerRight.y + radius * Math.sin(angle);
      bIndex++;
    }

    star.style.left = `${x}px`;
    star.style.top = `${y}px`;
  });
}

container.addEventListener('mouseenter', groupStars);
container.addEventListener('mouseleave', scatterStars);

scatterStars();