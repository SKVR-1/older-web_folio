// Use strict mode to catch common coding mistakes
'use strict';

// Remove unnecessary Lenis scroll event listener
// const lenis = new Lenis();
// lenis.on('scroll', (e) => {
//   console.log(e);
// });

// Optimize the requestAnimationFrame function
function raf() {
  lenis.raf();
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// GSAP timelines optimizations
// Define common options for scrollTrigger
const scrollTriggerOptions = {
  markers: true,
  scrub: 1,
};

// Define a function to create GSAP timelines
function createTimeline(trigger, target, start, end) {
  return gsap.timeline({
    scrollTrigger: {
      trigger: trigger,
      start: start,
      end: end,
      ...scrollTriggerOptions,
    },
  }).from(target, { width: '100%' });
}

// Define timeline animations for text areas
const tl1 = createTimeline('.text-area-two', '.text-area-two-clone', '150% 50%', '100% 20%');
const tl2 = createTimeline('.text-area-three', '.text-area-three-clone', '110% 50%', '100% 20%');

// Define timeline animations for reveal containers
const revealContainers = document.querySelectorAll('.reveal');
revealContainers.forEach((container) => {
  const image = container.querySelector('img');
  gsap.timeline({
    scrollTrigger: {
      trigger: container,
      toggleActions: 'restart none none reset',
    },
  })
    .from('.how-it-started', { duration: 1, opacity: 0, x: 150, stagger: 0.25 })
    .to('.raised-text', { duration: 2, yPercent: -150, ease: 'slow(0.7,0.7,false)', delay: 0, stagger: 20 })
    .from('.education', { duration: 1, delay: 2.5, ease: 'slow(0.7,0.7,false)', stagger: 0.25, opacity: 0, y: 150 })
    .set(container, { autoAlpha: 1 })
    .from(container, { duration: 1.5, xPercent: -100, ease: 'power2.out' })
    .from(image, { duration: 1.5, xPercent: 100, scale: 1.3, delay: -1.5, ease: 'power2.out' });
});





// const lenis = new Lenis()

// lenis.on('scroll', (e) => {
//   console.log(e)
// })

// function raf(time) {
//   lenis.raf(time)
//   requestAnimationFrame(raf)
// }

// requestAnimationFrame(raf)
  

  
// let tl1 = gsap.timeline({
//   scrollTrigger: {
//     trigger: ".text-area-two",
//     start: "150% 50%",
//     end: "100% 20%",
//     markers: true,
//     scrub: 1,
//   },
// });

// tl1.from(".text-area-two-clone", {
//   width: "100%",
// });

// let tl2 = gsap.timeline({
//   scrollTrigger: {
//     trigger: ".text-area-three",
//     start: "110% 50%",
//     end: "100% 20%",
//     markers: true,
//     scrub: 1,
//   },
// });

// tl2.from(".text-area-three-clone", {
//   width: "100%",
// });


// let tl = gsap.timeline({
//   delay: 0.7
// });



// let revealContainers = document.querySelectorAll(".reveal");

// revealContainers.forEach((container) => {
//   let image = container.querySelector("img");
//   let tl = gsap.timeline({
//     scrollTrigger: {
//       trigger: container,
//       toggleActions: "restart none none reset"
//     }
//   });

//   tl.from (".how-it-started", {
//     duration:1,
//     opacity:0,
//     x:150,
//     stagger:0.25
//   });

//   tl.to('.raised-text', {
//     duration: 2,
//     yPercent: -150,
//     // y: "+=10000",
//     ease: "slow(0.7,0.7,false)",
//     delay: 0,
//     stagger: 20
    
//   })
  
//   gsap.from (".education", {
//     duration:1,
//     // ease: "bounce.out",
//     delay: 2.5,
//     ease: "slow(0.7,0.7,false)",
//     stagger: 0.25,
//     opacity:0,
//     y:150
  
//     });
  
  
//   tl.set(container, { autoAlpha: 1 });
//   tl.from(container, 1.5, {
//     xPercent: -100,
//     ease: Power2.out
//   });
//   tl.from(image, 1.5, {
//     xPercent: 100,
//     scale: 1.3,
//     delay: -1.5,
//     ease: Power2.out
//   });
// });





