document.addEventListener('DOMContentLoaded', function() {
  // SLIDER FASILITAS SAJA
  const track = document.querySelector('.slider-track');
  const cards = Array.from(document.querySelectorAll('.slider-card'));
  const leftBtn = document.querySelector('.slider-nav.slider-nav-left');
  const rightBtn = document.querySelector('.slider-nav.slider-nav-right');
  if (!track || cards.length < 1 || !leftBtn || !rightBtn) return;
  let centerIdx = 1; // start with center card

  function getCenterCardWidth() {
    const centerCard = document.querySelector('.slider-card-center') || cards[1];
    return centerCard ? centerCard.offsetWidth : 340;
  }

  function updateSlider() {
    cards.forEach((card, i) => {
      card.classList.remove('slider-card-center', 'slider-card-side');
      if (i === centerIdx) {
        card.classList.add('slider-card-center');
      } else {
        card.classList.add('slider-card-side');
      }
    });
    // Offset dinamis sesuai lebar card center
    const offset = (centerIdx - 1) * -getCenterCardWidth();
    track.style.transform = `translateX(${offset}px)`;
  }

  leftBtn.addEventListener('click', function() {
    centerIdx = (centerIdx - 1 + cards.length) % cards.length;
    updateSlider();
  });
  rightBtn.addEventListener('click', function() {
    centerIdx = (centerIdx + 1) % cards.length;
    updateSlider();
  });

  // Swipe support (optional)
  let startX = null;
  track.addEventListener('touchstart', e => {
    startX = e.touches[0].clientX;
  });
  track.addEventListener('touchend', e => {
    if (startX === null) return;
    const dx = e.changedTouches[0].clientX - startX;
    if (dx > 40) leftBtn.click();
    else if (dx < -40) rightBtn.click();
    startX = null;
  });

  window.addEventListener('resize', updateSlider);
  updateSlider();
});