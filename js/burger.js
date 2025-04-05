(() => {

    let lastScrollY = window.scrollY;
    const nav = document.querySelector('.main-nav');
    
    window.addEventListener('scroll', () => {
      const currentScrollY = window.scrollY;
    
      if (currentScrollY > lastScrollY) {
        // Scrolling down
        nav.classList.add('nav-hidden');
      } else {
        // Scrolling up
        nav.classList.remove('nav-hidden');
      }
    
      lastScrollY = currentScrollY;
    });

})();