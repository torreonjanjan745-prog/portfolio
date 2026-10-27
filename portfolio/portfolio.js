const Experience = document.getElementById('Experience');
const reveals = document.querySelectorAll('.reveals');

const observers = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if(entry.isIntersecting){
      entry.target.classList.remove('opacity-0', 'translate-y-12');
      entry.target.classList.add('opacity-100', 'translate-y-0');
      observer.unobserve(entry.target);
    }
  });
}, {threshold: 0.15 });

reveals.forEach(r => observers.observe(r));
























const about = document.getElementById('about');
const reveal = document.querySelectorAll('.reveal');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('opacity-100', 'translate-y-0');
      entry.target.classList.remove('opacity-0', 'translate-y-12');

      observer.unobserve(entry.target);
    }
  });
}, {
  threshold: 0.5
});

reveal.forEach(el => observer.observe(el));


















document.addEventListener('DOMContentLoaded', () => {
const skills = document.getElementById('skills');
const skill = document.querySelectorAll('.skill');

if (!skills || skill.length === 0) return;

skill.forEach(skill => {
skill.classList.add('opacity-0', 'translate-y-10');
skill.classList.remove('opacity-100', 'translate-y-0');
});

const skillsObserver = new IntersectionObserver((entries) => {
entries.forEach(entry => {
if (entry.isIntersecting) {
skill.forEach((skill, i) => {
 setTimeout(() => {
skill.classList.remove('opacity-0', 'translate-y-10');
skill.classList.add('opacity-100', 'translate-y-0');
}, i * 150);
        });

        skillsObserver.unobserve(entry.target);
      }
    });
  });

  skillsObserver.observe(skills);
});

  
  
  // --- SEE MORE ---
  const SeeMore = document.getElementById('SeeMore');
  const moreText = document.getElementById('moreText');
  if (SeeMore && moreText) {
    SeeMore.addEventListener('click', function(e) {
      e.preventDefault();
      if (moreText.classList.contains("hidden")) {
        moreText.classList.remove('hidden');
        SeeMore.textContent = "See Less";
      } else {
        moreText.classList.add('hidden');
        SeeMore.textContent = "See More";
      }
    });
  }

  // --- IMAGE SLIDER ---
  const assets = [
    "asset/jh.png",
    "asset/beach.png"
  ];
  let index = 0;
  const image = document.getElementById('myPic');
  if (image) {
    setInterval(() => {
      index = (index + 1) % assets.length;
      image.src = assets[index];
    }, 5000);
  }

  // --- HAMBURGER MENU ---
  const hamBtn = document.getElementById('hamBtn');
  const menu = document.getElementById('menu');
  const blur = document.getElementById('blur');
  const lines = document.querySelectorAll('.line');
  let isOpen = false;

  function openMenu() {
    menu.classList.remove('hidden', 'menu-closed');
    blur.classList.remove('hidden');
    setTimeout(() => {
      menu.classList.remove('menu-closed');
      menu.classList.add('menu-open');
    }, 10);
    lines.forEach(line => line.classList.add('open'));
    document.body.style.overflow = 'hidden';
    isOpen = true;
  }

  function closeMenu() {
    menu.classList.remove('menu-open');
    menu.classList.add('menu-closed');
    lines.forEach(line => line.classList.remove('open'));
    document.body.style.overflow = '';
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

  if (blur) {
    blur.addEventListener('click', closeMenu);
  }

  document.querySelectorAll('#menu a').forEach(a => {
    a.addEventListener('click', closeMenu);
  });
