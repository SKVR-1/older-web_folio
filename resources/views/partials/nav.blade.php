
<nav class="p-4 main-header-nav">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="text-lg text-white">
                SVKR
            </div>

            <!-- Responsive Menu Button -->
            <button id="menuButton" class="lg:hidden text-white focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <!-- Responsive Dropdown Menu -->
            <div class="hidden lg:flex space-x-4">
                <a href="#" class="link text-white">About me</a>
                <a href="#" class="link text-white">How it all started</a>
                <a href="#" class="link text-white">My work</a>
                <a href="#" class="link text-white">Contact me</a>
            </div>
        </div>
    </nav>

    <!-- Mobile Dropdown Menu -->
    <div id="mobileDropdown" class="lg:hidden hidden absolute top-16 right-0 bg-gray-800 p-4">
        <a href="#" class="block text-white mb-2">About me</a>
        <a href="#" class="block text-white mb-2">How it all started</a>
        <a href="#" class="block text-white mb-2">My work</a>
        <a href="#" class="block text-white">Contact me</a>
    </div>









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

<script>
        document.getElementById('menuButton').addEventListener('click', function() {
            var mobileDropdown = document.getElementById('mobileDropdown');
            mobileDropdown.style.display = (mobileDropdown.style.display === 'none' || mobileDropdown.style.display === '') ? 'block' : 'none';
        });
    </script>
