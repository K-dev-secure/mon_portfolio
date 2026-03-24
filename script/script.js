function initTechCarousel() {
  const carousel = document.getElementById('carousel');
  if (!carousel) {
    return;
  }

  const technologies = [
    { icon: 'fab fa-html5', label: 'HTML' },
    { icon: 'fab fa-css3-alt', label: 'CSS' },
    { icon: 'fab fa-php', label: 'PHP' },
    { icon: 'fab fa-react', label: 'React' },
    { icon: 'fab fa-wordpress', label: 'WordPress' },
    { icon: 'fab fa-figma', label: 'Figma' }
  ];

  const createItem = (tech) => `
    <div class="logo-tech">
      <i class="${tech.icon}"></i>
      <span>${tech.label}</span>
    </div>
  `;

  const originalItems = technologies.map(createItem).join('');

  carousel.innerHTML = `
    <div class="carrousel-stack" aria-label="Technologies principales">
      <div class="piste-carrousel">
        ${originalItems}${originalItems}
      </div>
    </div>
  `;
}

function initBurgerMenu() {
  const nav = document.querySelector('.nav');
  const navList = nav ? nav.querySelector('ul') : null;

  if (!nav || !navList) {
    return;
  }

  navList.id = 'mainMenu';

  let burgerBtn = document.getElementById('burgerMenuBtn');
  if (!burgerBtn) {
    burgerBtn = document.createElement('button');
    burgerBtn.id = 'burgerMenuBtn';
    burgerBtn.type = 'button';
    burgerBtn.setAttribute('aria-label', 'Ouvrir le menu');
    burgerBtn.setAttribute('aria-controls', 'mainMenu');
    burgerBtn.innerHTML = '<span></span><span></span><span></span>';
    nav.insertBefore(burgerBtn, navList);
  }

  let menuOverlay = document.getElementById('menuOverlay');
  if (!menuOverlay) {
    menuOverlay = document.createElement('div');
    menuOverlay.id = 'menuOverlay';
    document.body.appendChild(menuOverlay);
  }

  const mainMenu = navList;
  const menuLinks = mainMenu.querySelectorAll('li a');

  function openMenu() {
    burgerBtn.classList.add('active');
    mainMenu.classList.add('active');
    menuOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
    burgerBtn.setAttribute('aria-expanded', 'true');
  }

  function closeMenu() {
    burgerBtn.classList.remove('active');
    mainMenu.classList.remove('active');
    menuOverlay.classList.remove('active');
    document.body.style.overflow = '';
    burgerBtn.setAttribute('aria-expanded', 'false');
  }

  function toggleMenu() {
    if (burgerBtn.classList.contains('active')) {
      closeMenu();
    } else {
      openMenu();
    }
  }

  burgerBtn.addEventListener('click', function (e) {
    e.preventDefault();
    e.stopPropagation();
    toggleMenu();
  });

  menuOverlay.addEventListener('click', function () {
    closeMenu();
  });

  menuLinks.forEach(function (link) {
    link.addEventListener('click', function (e) {
      const href = this.getAttribute('href');

      if (href && href.startsWith('#')) {
        e.preventDefault();
        const target = document.querySelector(href);
        closeMenu();
        if (target) {
          target.scrollIntoView({ behavior: 'auto', block: 'start' });
        }
        return;
      }

      closeMenu();
    });
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && burgerBtn.classList.contains('active')) {
      closeMenu();
    }
  });

  window.addEventListener('resize', function () {
    if (window.innerWidth > 980 && burgerBtn.classList.contains('active')) {
      closeMenu();
    }
  });

  burgerBtn.setAttribute('aria-expanded', 'false');
}

document.addEventListener('DOMContentLoaded', () => {
  initBurgerMenu();
  initTechCarousel();
});
