<nav class="main-nav dark:bg-gray-900 fixed w-full z-20 top-0  border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
    <div class="text-lg text-white">
        SVKR
    </div>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse text-white">
  <div id="clock"></div>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <div id="clock"></div>
    </button>
  </div>
    <div class="hidden lg:flex space-x-4 font-light">
        <a href="#" class="link text-white">About me</a>
        <a href="#" class="link text-white">How it all started</a>
        <a href="#" class="link text-white">My work</a>
        <a href="#" class="link text-white">Contact me</a>
    </div>
  </div>
</nav>






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

