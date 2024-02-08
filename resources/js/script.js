let tl = gsap.timeline ({
  ScrollTrigger:{
    trigger: ".two",
    start:"20% 50%",
    end: "100% 50%",
    markers: true,
    scrub: 1,
  },
});
tl.to(".intro-hover",{
  width:"100%",
})




const lenis = new Lenis()

lenis.on('scroll', (e) => {
  console.log(e)
})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)