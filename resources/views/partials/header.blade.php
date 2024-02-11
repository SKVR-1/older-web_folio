<div class="cursor"></div>

    <section class="hero-text">
        <div class="hero-text-content">
            <h1 class="cursor-scale font-bold	bg-gradient-to-r text-white cursor-scale pb-4">My Name is Sud</h1>
            <h2 class="cursor-scale font-medium bg-gradient-to-r text-white cursor-scale">I am a designer <span class="text-pink"> + </span> Front End Developer</h2>
        </div>
    </section>


<!-- Cursor -->

<script>
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
</script>


