const lenis = new Lenis()

lenis.on('scroll', (e) => {
  console.log(e)
})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)
  
  
let tl1 = gsap.timeline({
  scrollTrigger: {
    trigger: ".text-area-two",
    start: "150% 50%",
    end: "100% 20%",
    markers: true,
    scrub: 1,
  },
});

tl1.from(".text-area-two-clone", {
  width: "100%",
});

let tl2 = gsap.timeline({
  scrollTrigger: {
    trigger: ".text-area-three",
    start: "110% 50%",
    end: "100% 20%",
    markers: true,
    scrub: 1,
  },
});

tl2.from(".text-area-three-clone", {
  width: "100%",
});


let tl = gsap.timeline({
  delay: 0.7});

tl.to('.raised-text', {
  duration:2, y:0, 
  stagger: 1});


  gsap.to('.how-started', {
    x: '100%', // Move the text horizontally
    duration: 1, // Duration of the animation
    repeat: 1, // Repeat indefinitely
    scrollTrigger: {
      trigger: '.section-three', // Trigger the animation when the section comes into view
      start: 'top 50%', // Start the animation when the top of the section reaches the middle of the viewport
      end: 'bottom top', // End the animation when the bottom of the section reaches the top of the viewport
      scrub: true, // Smooth scrolling
      markers: true // Add markers for debugging
    }
  });