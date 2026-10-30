
document.addEventListener('DOMContentLoaded', () => {

  // =====================================
  // REVEAL ANIMATIONS
  // =====================================

  const revealElements = document.querySelectorAll(
    '.reveal, .reveals, .revel'
  );

  const revealObserver = new IntersectionObserver((entries, observer) => {

    entries.forEach(entry => {

      if (entry.isIntersecting) {

        entry.target.classList.remove('opacity-0', 'translate-y-12', 'translate-y-10');

        entry.target.classList.add('opacity-100', 'translate-y-0');

        observer.unobserve(entry.target);
      }

    });

  }, {
    threshold: 0.15
  });

  revealElements.forEach(element => {
    revealObserver.observe(element);
  });


  // =====================================
  // SEE MORE
  // =====================================

  const SeeMore = document.getElementById('SeeMore');
  const moreText = document.getElementById('moreText');

  if (SeeMore && moreText) {

    SeeMore.addEventListener('click', function(e) {

      e.preventDefault();

      if (moreText.classList.contains('hidden')) {

        moreText.classList.remove('hidden');
        SeeMore.textContent = 'See Less';

      } else {

        moreText.classList.add('hidden');
        SeeMore.textContent = 'See More';

      }

    });

  }


  // =====================================
  // IMAGE SLIDER
  // =====================================

  const assets = [
    "../asset/jh.png",
    "../asset/beach.png"
  ];

  let index = 0;

  const image = document.getElementById('myPic');

  if (image) {

    setInterval(() => {

      index = (index + 1) % assets.length;

      image.src = assets[index];

    }, 5000);

  }


  // =====================================
  // HAMBURGER MENU
  // =====================================

  const hamBtn = document.getElementById('hamBtn');
  const menu = document.getElementById('menu');
  const blur = document.getElementById('blur');

  const lines = document.querySelectorAll('.line');

  let isOpen = false;


  function openMenu() {

    if (!menu || !blur) return;

    menu.classList.remove('hidden', 'menu-closed');

    blur.classList.remove('hidden');

    setTimeout(() => {

      menu.classList.remove('menu-closed');

      menu.classList.add('menu-open');

    }, 10);

    lines.forEach(line => {
      line.classList.add('open');
    });

    document.body.style.overflow = 'hidden';

    if (hamBtn) {
      hamBtn.setAttribute('aria-expanded', 'true');
    }

    isOpen = true;

  }


  function closeMenu() {

    if (!menu || !blur) return;

    menu.classList.remove('menu-open');

    menu.classList.add('menu-closed');

    lines.forEach(line => {
      line.classList.remove('open');
    });

    document.body.style.overflow = '';

    if (hamBtn) {
      hamBtn.setAttribute('aria-expanded', 'false');
    }

    setTimeout(() => {

      menu.classList.add('hidden');

      blur.classList.add('hidden');

      menu.classList.remove('menu-closed');

    }, 300);

    isOpen = false;

  }


  if (hamBtn) {

    hamBtn.addEventListener('click', () => {

      if (isOpen) {

        closeMenu();

      } else {

        openMenu();

      }

    });

  }


  // CLOSE WHEN CLICKING OVERLAY

  if (blur) {

    blur.addEventListener('click', closeMenu);

  }


  // CLOSE WHEN CLICKING MENU LINKS

  document.querySelectorAll('#menu a').forEach(link => {

    link.addEventListener('click', closeMenu);

  });


  // CLOSE WITH ESCAPE KEY

  document.addEventListener('keydown', (e) => {

    if (e.key === 'Escape' && isOpen) {

      closeMenu();

    }

  });


});
