const lenis = new Lenis()

lenis.on('scroll', (e) => {
  console.log(e)
})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)
  
  
let tl = gsap.timeline ({
  scrollTrigger:{
    trigger: ".text-area-two",
    start: "150% 50%,",
    end: "100% 20%",
    markers: true,
    scrub: 1,
  },
})
  tl.from(".text-area-two-clone",{
    width:"100%",

  })


  gsap.from(".text-area-about", {
    opacity: 0,
    y: 120,
    scrollTrigger: {
      trigger: ".text-area-about", // Trigger the animation when any element with the class "text-area-about" comes into view
      start: "top 50%", // Start the animation when the top of the element is 80% in view
      end: "bottom 4%", // End the animation when the bottom of the element is 20% in view
      toggleActions: "play none none none", // Play the animation once when scrolling down, but don't reverse it when scrolling back up
      duration: 1,
      stagger: 0.5 // Stagger the animation between each text element
    }
  });
  