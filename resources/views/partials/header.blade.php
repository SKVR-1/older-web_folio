<div class="header">
    <h1 id="typewriter" class="text-8xl font-thin text-center text-white my-20 mt-52"></h1>
</div>



<script>
    const textToType = "Hey my name is Sud!";
    const typingSpeed = 100; // in milliseconds

    let charIndex = 0;
    const typewriterElement = document.getElementById('typewriter');

    function typeWriter() {
        if (charIndex < textToType.length) {
            typewriterElement.innerHTML += textToType.charAt(charIndex);
            charIndex++;
            setTimeout(typeWriter, typingSpeed);
        }
    }

    // Start typing when the page is loaded
    document.addEventListener('DOMContentLoaded', typeWriter);
</script>
