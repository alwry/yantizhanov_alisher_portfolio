(() => {
// const sidebar = document.querySelector(".sidebar");
// const showSidebarButton = document.querySelector(".desktop-hidden a");
gsap.registerPlugin(ScrollTrigger)
const player = new Plyr('video');
const welcomeHeading = document.querySelector('.welcome-h2');
const welcomeText = document.querySelector('.welcome-text');
const hailingCon = document.querySelector('#hailing-con');
const workCards = document.querySelectorAll('.work-card');
const pageHeading = document.querySelector('.page-h2');
const aboutChapters = document.querySelectorAll('.about-chapter');
const ctaHeading = document.querySelector('.cta-heading');
const contactText = document.querySelector('.main-p-anim');
const caseText = document.querySelectorAll('.case-p');


gsap.fromTo(welcomeHeading, 
  {x: -300, opacity: 0, scale: .4}, {x: 0, opacity: 1, scale: 1, duration: .8, ease: "power4.out"});

gsap.fromTo(welcomeText, 
  {x: 300, opacity: 0}, {x: 0, opacity: 1, duration: .8, ease: "power4.out"});

gsap.fromTo(pageHeading, 
  {x: -300, opacity: 0}, {x: 0, opacity: 1, duration: 1.5, ease: "power4.out"});

gsap.fromTo(contactText, 
  {x: -300, opacity: 0}, {x: 0, opacity: 1, duration: 1.5, ease: "power4.out"});

gsap.set(hailingCon, {opacity: 0, x: -1000});
gsap.to(hailingCon, {
  opacity: 1,
  x: 0,
  ease: "power4.out",
  scrollTrigger: {
    trigger: hailingCon,
    start: 'top bottom',
    end: 'bottom 60%',
    scrub: true,
  }
});

gsap.set(ctaHeading, {opacity: 0});
gsap.to(ctaHeading, {
  opacity: 1,
  ease: "power4.out",
  scrollTrigger: {
    trigger: ctaHeading,
    start: 'top 60%',
    end: 'bottom 40%',
    scrub: true,
  }
});

workCards.forEach(card => {
  gsap.set(card, {opacity: 0, x: -1000, scale: .5});
  gsap.to(card, {
    opacity: 1,
    x: 0,
    scale: 1,
    scrollTrigger: {
      trigger: card,
      start: 'top bottom',
      end: 'bottom 60%',
      scrub: true,
    }
  });
})

aboutChapters.forEach(chapter => {
  gsap.set(chapter, {opacity: 0, x: -1000, scale: .5});
  gsap.to(chapter, {
    opacity: 1,
    x: 0,
    scale: 1,
    scrollTrigger: {
      trigger: chapter,
      start: 'top bottom',
      end: 'bottom 60%',
      scrub: true,
    }
  });
})

caseText.forEach(casep => {
  gsap.set(casep, {opacity: 0, x: -1000, scale: .5});
  gsap.to(casep, {
    opacity: 1,
    x: 0,
    scale: 1,
    scrollTrigger: {
      trigger: casep,
      start: 'top bottom',
      end: 'bottom 60%',
      scrub: true,
    }
  });
})







// function showSidebar() {
//     sidebar.classList.toggle("show");
//   }

// showSidebarButton.addEventListener("click", showSidebar);


})();