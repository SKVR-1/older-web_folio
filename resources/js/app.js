import './bootstrap';
import { gsap } from "gsap";
import { Flip } from "gsap/Flip";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import { MotionPathPlugin } from "gsap/MotionPathPlugin";
import { EaselPlugin } from "gsap/EaselPlugin";

gsap.registerPlugin(Flip,ScrollTrigger,ScrollToPlugin,MotionPathPlugin,EaselPlugin);


  
// <!--cursor-->
  
  var cursor = document.querySelector('.cursor'),
      cursorScale = document.querySelectorAll('.cursor-scale'),
      mouseX = 0,
      mouseY = 0
  
  gsap.to({}, 0.016, {
      repeat: -1,
  
      onRepeat: function () {
          gsap.set(cursor, {
              css: {
                  left: mouseX,
                  top: mouseY
              }
          })
      }
  });
  
  window.addEventListener("mousemove", function (e) {
      mouseX = e.clientX;
      mouseY = e.clientY
  });
  
  cursorScale.forEach(link => {
      link.addEventListener('mouseleave', () => {
          cursor.classList.remove('grow');
          cursor.classList.remove('grow-small');
      });
      link.addEventListener('mousemove', () => {
          cursor.classList.add('grow');
          if(link.classList.contains('small')){
              cursor.classList.remove('grow');
              cursor.classList.add('grow-small');
          }
      });
  });
  


  
  


  
  
  
  
  



