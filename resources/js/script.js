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
    start: "120% 50%,",
    end: "100% 50%",
    // markers: true,
    scrub: 1,
  },
})
  tl.from(".text-area-two-clone",{
    width:"100%",

  })

