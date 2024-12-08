(() => {
// const sidebar = document.querySelector(".sidebar");
// const showSidebarButton = document.querySelector(".desktop-hidden a");
gsap.registerPlugin(ScrollTrigger)
const player = new Plyr('video');
const welcomeHeading = document.querySelector('.welcome-h2');
const welcomeText = document.querySelector('.welcome-text');
const hailingCon = document.querySelector('#hailing-con');

console.log(welcomeHeading)

gsap.fromTo(welcomeHeading, 
  {x: -300, opacity: 0, scale: .4}, {x: 0, opacity: 1, scale: 1, duration: .6});

gsap.fromTo(welcomeText, 
  {x: 300, opacity: 0}, {x: 0, opacity: 1, duration: .6});

gsap.set(hailingCon, {opacity: 0, x: -1000});

gsap.to(hailingCon, {
    opacity: 1,
    x: 0,
    scrollTrigger: {
      trigger: hailingCon,
      start: 'top bottom',
      end: 'bottom 60%',
      scrub: true,
      markers: true,
    }
  });



// function showSidebar() {
//     sidebar.classList.toggle("show");
//   }

// showSidebarButton.addEventListener("click", showSidebar);


})();