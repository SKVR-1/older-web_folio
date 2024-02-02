<nav class="p-4 mx-auto">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="text-white font-thin text-lg">
            SVKR
        </div>

        <div class="text-small font-thin text-white" id="clock"></div>

        <!-- Responsive Menu Button -->
        <button id="menuButton" class="lg:hidden text-white focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Responsive Menu -->
        <div class="nav-menu">
        <div id="mobileMenu" class="hidden font-thin lg:flex flex-col lg:flex-row space-x-4">
            <a href="#" class="link-1 text-white">About me</a>
            <a href="#" class="link-2 text-white">How it all started</a>
            <a href="#" class="link-3 text-white">My work</a>
            <a href="#" class="link-4 text-white">Contact me</a>
        </div>
        </div>
    </div>
</nav>


<script>
    // Add event listener to the menu button
    document.getElementById('menuButton').addEventListener('click', function () {
        // Toggle the visibility of the mobile menu
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });
</script>


<!-- Live time -->

<script>
    function updateClock() {
        const londonTime = new Date().toLocaleString("en-GB", { timeZone: "Europe/London" });
        document.getElementById('clock').textContent = londonTime;
    }

    // Update the clock every second
    setInterval(updateClock, 1000);

    // Initial call to set the clock
    updateClock();
</script>
