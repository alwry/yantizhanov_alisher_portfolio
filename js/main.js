(() => {
// const sidebar = document.querySelector(".sidebar");
// const showSidebarButton = document.querySelector(".desktop-hidden a");
gsap.registerPlugin(ScrollTrigger)
gsap.registerPlugin(SplitText)


const welcomeHeading = document.querySelector('.welcome-h2');
const welcomeText = document.querySelector('.welcome-text');
const workCards = document.querySelectorAll('.card');
const pageHeading = document.querySelector('.page-h2');
const aboutChapters = document.querySelectorAll('.about-chapter');
const ctaCon = document.querySelector('#cta-con');
const ctaHeading = document.querySelector('.cta-heading');
const contactText = document.querySelector('.main-p-anim');
const caseText = document.querySelectorAll('.case-p');
const welcomeStar = document.querySelector('.welcome-star');




document.addEventListener("DOMContentLoaded", function () {
  const player = new Plyr('.player');
  setTimeout(() => {
    player.volume = 0.2; 
  }, 100); 
});



gsap.fromTo(welcomeText, 
  {y: -50, opacity: 0}, {y: 0, opacity: 1, duration: .8, delay: .8, ease: "power4.out"});

  gsap.fromTo(welcomeStar, 
    {y: 50, opacity: 0}, {y: 0, opacity: 1, duration: .8, delay: .8, ease: "power4.out"});



const pageHeadingSplit = new SplitText(pageHeading, { type: "lines", linesClass: "lineChild-coord" });
new SplitText(pageHeading, { type: "lines", linesClass: "lineParent-phs" });

gsap.fromTo(pageHeadingSplit.lines,
  {
    yPercent: 100,
    opacity: 0
  },
  {
    duration: 0.5,
    yPercent: 0,
    opacity: 1,
    ease: "power4.out",
    stagger: 0.1,
    delay: 0.3 // optional: to play after welcomeHeading
  }
);

gsap.fromTo(contactText, 
  {x: -300, opacity: 0}, {x: 0, opacity: 1, duration: 1.5, ease: "power4.out"});

  const welcomeCoord = document.querySelector(".welcome-coord");

  const coordSplit = new SplitText(welcomeCoord, { type: "lines", linesClass: "lineChild-coord" });
  new SplitText(welcomeCoord, { type: "lines", linesClass: "lineParent-coord" });
  
  gsap.fromTo(coordSplit.lines,
    {
      yPercent: 100,
      opacity: 0
    },
    {
      duration: 0.8,
      yPercent: 0,
      opacity: 1,
      ease: "power2.out",
      stagger: 0.1,
      delay: 0.6 // optional: to play after welcomeHeading
    }
  );
  


const welcomeSplit = new SplitText(welcomeHeading, { type: "lines", linesClass: "lineChild-welcome" });
new SplitText(welcomeHeading, { type: "lines", linesClass: "lineParent-welcome" });

gsap.fromTo(welcomeSplit.lines,
  {
    yPercent: 100,
    opacity: 0
  },
  {
    duration: 0.8,
    yPercent: 0,
    opacity: 1,
    ease: "power2.out",
    stagger: 0.1,
    delay: 0.2
  }
);


workCards.forEach(card => {
  gsap.set(card, {opacity: 0, x: -1000, scale: .5});
  gsap.to(card, {
    opacity: 1,
    x: 0,
    scale: 1,
    scrollTrigger: {
      trigger: card,
      toggleActions: 'play none none none',
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

  });
})

caseText.forEach(casep => {
  gsap.set(casep, {opacity: 0, x: -1000, scale: .5});
  gsap.to(casep, {
    opacity: 1,
    x: 0,
    scale: 1,
  });
})

// about me home page animation ->

const hailingSplit = new SplitText(".hailing-text", { type: "lines", linesClass: "lineChild-hailing" });
new SplitText(".hailing-text", { type: "lines", linesClass: "lineParent-hailing" });

const lines = document.querySelectorAll(".lineChild-hailing");

lines.forEach((line) => {
  gsap.from(line, {
    duration: 0.75,
    yPercent: 100,
    opacity: 0,
    ease: "power2.out",
    scrollTrigger: {
      trigger: line,
      start: "top 60%",
      end: "top 40%",
      scrub: true,
      toggleActions: "play none none none",
    },
  });
});

// SplitText for .cta-heading


const ctaSplit = new SplitText(ctaHeading, { type: "lines", linesClass: "lineChild-cta" });
new SplitText(ctaHeading, { type: "lines", linesClass: "lineParent-cta" });

// Scroll-triggered animation for each line
ctaSplit.lines.forEach((line) => {
  gsap.from(line, {
    duration: 0.75,
    yPercent: 100,
    opacity: 0,
    ease: "power2.out",
    scrollTrigger: {
      trigger: line,
      start: "top 80%",   // Adjust as needed
      end: "top 60%",
      scrub: true,
      toggleActions: "play none none none",
    },
  });
});


  })();




