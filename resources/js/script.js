// Use strict mode to catch common coding mistakes
'use strict';

function raf() {
  lenis.raf();
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

const scrollTriggerOptions = {
  markers: true,
  scrub: 1,
};

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
const tl2 = createTimeline('.welcome-to-my-digital-space', '.welcome-to-my-digital-space', '0%  30%', '0% 0%');
const tl3 = createTimeline('.wolves-aye-we', '.wolves-aye-we', '100% 50%', '100% 20%');

// Define timeline animations for reveal containers
const revealContainers = document.querySelectorAll('.reveal');
revealContainers.forEach((container) => {
  const image = container.querySelector('img');
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: container,
      toggleActions: 'restart none none reset',
    },
  })

  
  
  .from('.welcome-to-my-digital-space', { duration: 1, yPercent: -170,  delay: 0, stagger: 0 })
  .to('.welcome-to-my-digital-space', { duration: 1, yPercent: 0,  delay: 0, stagger: 0 })


  .from('.wolves-aye-we', { duration: 0.5, xPercent: -120, ease: 'slow(0.7,0.7,false)', delay: 0, stagger: 2 })
  .to('.wolves-aye-we', { duration: 0.8, xPercent: 0, backgroundColor:"#FF3659", padding:"10",  delay: 0, stagger: 2 })

  .from('.how-it-all-started', { duration: 1, opacity: 0, x: 150, stagger: 0.25, x: '100%', ease:'linear' })
  .from('.raised-text', { opacity:0, yPercent: -1500, delay: 0, duration: 1 })
  .to('.raised-text', { duration: 1, yPercent: -150, ease: 'slow(0.7,0.7,false)', delay: 0, stagger: 3 })
  .set(container, { autoAlpha: 1 })
  .from(container, { duration: 1.5, xPercent: -100, ease: 'power2.out' })
  .from(image, { duration: 1.5, xPercent: 100, scale: 1.3, delay: -1.5, ease: 'power2.out' })

  .from('.selected-work', { duration: 1, xPercent: -290, ease: 'slow(0.7,0.7,false)', delay: 0, stagger: 10 })
  .to('.selected-work', { duration: 1, xPercent: 0, backgroundColor:"#FF3659", padding:"10", ease: 'slow(0.7,0.7,false)', delay: 0, stagger: 10 })


});

    // Get all slides
    const slides = document.querySelectorAll('.work-1');

    // Initial slide index
    let currentIndex = 0;

    // Function to move to the next slide
    function nextSlide() {
      // Move to the next slide index
      currentIndex++;

      // Loop back to the first slide if reached the end
      if (currentIndex >= slides.length) {
        currentIndex = 0;
      }

      // Scroll to the next slide
      gsap.to('.flex', { scrollTo: { x: currentIndex * slides[0].offsetWidth } });
    }

    // Function to move to the previous slide
    function prevSlide() {
      // Move to the previous slide index
      currentIndex--;

      // Loop to the last slide if reached the beginning
      if (currentIndex < 0) {
        currentIndex = slides.length - 1;
      }

      // Scroll to the previous slide
      gsap.to('.flex', { scrollTo: { x: currentIndex * slides[0].offsetWidth } });
    }