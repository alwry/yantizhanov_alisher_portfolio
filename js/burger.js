(() => {

const burgerIcon = document.querySelector('#burger-div');
const mobileNav = document.querySelector('.mobile-nav');

function toggleNav() {
    mobileNav.classList.toggle('hidden')
};

burgerIcon.addEventListener('click', toggleNav);

})();