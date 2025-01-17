// Use strict mode to catch common coding mistakes
'use strict';

// Request Animation Frame for smooth scrolling
function raf() {
  lenis.raf();
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

const scrollTriggerOptions = {
  markers: false, // Disable markers for cleaner UI
  scrub: 1,
};

// Function to create GSAP timelines
function createTimeline(trigger, target, start, end) {
  return gsap.timeline({
    scrollTrigger: {
      trigger: trigger,
      start: start,
      end: end,
      ...scrollTriggerOptions,
    },
  }).from(target, { opacity: 0, y: 50 });
}

// Define animations for specific sections
const tl1 = createTimeline('.text-area-two', '.text-area-two', 'top 75%', 'top 50%');
const tl2 = createTimeline('.welcome-to-my-digital-space', '.welcome-to-my-digital-space', 'top 90%', 'top 60%');
const tl3 = createTimeline('.wolves-aye-we', '.wolves-aye-we', 'top 80%', 'top 50%');
const tl4 = createTimeline('.contact-heading', '.contact-heading', 'top 85%', 'top 55%');
const tl5 = createTimeline('.raised-block', '.raised-block', 'top 85%', 'top 55%');




// Animate reveal containers
const revealContainers = document.querySelectorAll('.reveal');
revealContainers.forEach(container => {
  const image = container.querySelector('img');
  gsap.timeline({
    scrollTrigger: {
      trigger: container,
      toggleActions: 'restart none none reset',
    },
  })
    .set(container, { autoAlpha: 1 })
    .from(container, { duration: 1.5, xPercent: -100, ease: 'power2.out' })
    .from(image, { duration: 1.5, xPercent: 100, scale: 1.3, delay: -1.5, ease: 'power2.out' });
});

// Slideshow navigation
const slideshow = document.querySelector('.slideshow');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

nextBtn.addEventListener('click', () => {
  gsap.to(slideshow, { x: '-=300', duration: 0.5, ease: 'power2.out' });
});

prevBtn.addEventListener('click', () => {
  gsap.to(slideshow, { x: '+=300', duration: 0.5, ease: 'power2.out' });
});

// Click-to-enlarge functionality
const slideItems = document.querySelectorAll('.slide-item');
const enlargedView = document.getElementById('enlargedView');
const enlargedImage = document.getElementById('enlargedImage');
const enlargedTitle = document.getElementById('enlargedTitle');
const enlargedDescription = document.getElementById('enlargedDescription');
const closeButton = document.getElementById('closeButton');

const slideData = [
  { src: "https://via.placeholder.com/400x200", title: "Project 1", description: "Details about Project 1." },
  { src: "https://via.placeholder.com/400x200", title: "Project 2", description: "Details about Project 2." },
  { src: "https://via.placeholder.com/400x200", title: "Project 3", description: "Details about Project 3." },
  { src: "https://via.placeholder.com/400x200", title: "Project 4", description: "Details about Project 4." },
  { src: "https://via.placeholder.com/400x200", title: "Project 5", description: "Details about Project 5." },
  { src: "https://via.placeholder.com/400x200", title: "Project 6", description: "Details about Project 6." },
];

slideItems.forEach((item, index) => {
  item.addEventListener('click', () => {
    enlargedImage.src = slideData[index].src;
    enlargedTitle.textContent = slideData[index].title;
    enlargedDescription.textContent = slideData[index].description;

    gsap.to(enlargedView, {
      opacity: 1,
      display: 'flex',
      duration: 0.5,
    });
    document.body.classList.add('no-scroll');
  });
});

closeButton.addEventListener('click', () => {
  gsap.to(enlargedView, {
    opacity: 0,
    display: 'none',
    duration: 0.5,
  });
  document.body.classList.remove('no-scroll');
});
