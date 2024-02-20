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
  delay: 0.7
});

tl.to('.raised-text', {
  duration: 2,
  y: 0,
  stagger: 1
})
.from('.education', {
  opacity: 0, 
  duration: 1, // Adjust the duration as needed
  stagger: 0.5, // Adjust the stagger if necessary
  ease: "power2.out" // Optional: Change the easing function if needed
});



  gsap.set(".how-started", {
    x: (i) => i * 300
  });
  
  gsap.to(".how-started", {
    duration: 20,
    ease: "none",
    x: "+=2000", //move each box 500px to right
    modifiers: {
      x: gsap.utils.unitize(x => parseFloat(x) % 1200) //force x value to be between 0 and 500 using modulus
    },
    repeat: -1
  });



let revealContainers = document.querySelectorAll(".reveal");

revealContainers.forEach((container) => {
  let image = container.querySelector("img");
  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: container,
      toggleActions: "restart none none reset"
    }
  });

  tl.set(container, { autoAlpha: 1 });
  tl.from(container, 1.5, {
    xPercent: -100,
    ease: Power2.out
  });
  tl.from(image, 1.5, {
    xPercent: 100,
    scale: 1.3,
    delay: -1.5,
    ease: Power2.out
  });
});
