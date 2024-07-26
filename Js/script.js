let prevScrollpos = window.pageYOffset;

window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;
  let navbar = document.getElementById('navbar');
  
  if (window.innerWidth >= 500) {
    if (prevScrollpos > currentScrollPos) {
      navbar.style.cssText = "top: 20; margin-bottom: 3em; z-index: 1"; 
    } else {
      navbar.style.cssText = "top: -30em;"; 
    }
    prevScrollpos = currentScrollPos;
  } else {
    // Jika layar <= 500px, tambahkan class no-scroll
    navbar.classList.add('no-scroll');
  }
};

// Navbar
document.getElementById('menu-button').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default anchor behavior
    var nav = document.querySelector('#navbar .navbar-nav');
    var menuButton = document.getElementById('menu-button');
    var menuIcon = menuButton.querySelector('.feather-menu');

    nav.classList.toggle('active');
    menuButton.classList.toggle('active');

    if (menuButton.classList.contains('active')) {
        menuIcon.setAttribute('data-feather', 'x');
    } else {
        menuIcon.setAttribute('data-feather', 'menu');
    }

    feather.replace(); // Update the feather icons
});




// Hapus class no-scroll jika ukuran layar berubah menjadi lebih dari 500px
window.onresize = function() {
  if (window.innerWidth >= 500) {
    document.getElementById('navbar').classList.remove('no-scroll');
  }
};


document.addEventListener('DOMContentLoaded', function () {
  const items = document.querySelectorAll('.item');
  const leftButton = document.querySelector('.carousel-btn.left');
  const rightButton = document.querySelector('.carousel-btn.right');
  let currentItem = 0;

  leftButton.addEventListener('click', function () {
      if (currentItem > 0) {
          currentItem--;
          updateCarousel();
      }
  });

  rightButton.addEventListener('click', function () {
      if (currentItem < items.length - 1) {
          currentItem++;
          updateCarousel();
      }
  });

  function updateCarousel() {
      const offset = -currentItem * 500; // 500 is the width of each item
      items.forEach(item => {
          item.style.transform = `translateX(${offset}px)`;
      });
      updateButtons();
  }

  function updateButtons() {
      if (currentItem === 0) {
          leftButton.classList.add('active');
      } else {
          leftButton.classList.remove('active');
      }
      if (currentItem === items.length - 1) {
          rightButton.classList.add('active');
      } else {
          rightButton.classList.remove('active');
      }
  }

  // Initial update
  updateButtons();
});

function updateSymbol() {
    const heading = document.getElementById('service-heading');
    if (window.innerWidth <= 500) {
        heading.innerHTML = 'Service &#x2193;'; // Unicode for down arrow
    } else {
        heading.innerHTML = 'Service &raquo;'; // Unicode for raquo
    }
}

// Initial check
updateSymbol();

// Update on resize
window.addEventListener('resize', updateSymbol)