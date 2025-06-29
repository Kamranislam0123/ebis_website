<!-- Header -->
<header class="bg-white shadow-md py-4 px-6">
  <div class="container mx-auto flex justify-between items-center">
    <!-- Logo -->
    <a href="#" class="flex items-center">
      <img src="/assets/images/EBIS-BD logo.png" alt="Logo" class="w-36">
    </a>

    <!-- Desktop Navigation Menu -->
    <nav class="hidden lg:flex space-x-6 text-lg">
      <a href="#" class="text-black hover:border-b-2 hover:border-red-600">Home</a>
      <a href="#" class="text-black hover:border-b-2 hover:border-red-600">About Us</a>
      <a href="#" class="text-black hover:border-b-2 hover:border-red-600">Our Services</a>

      <!-- Study Destination Dropdown Button -->
      <div class="relative" id="desktopDropdownContainer">
        <button id="studyDropdownButton" class="text-black hover:border-b-2 hover:border-red-600 flex items-center">
          Study Destination
          <!-- Down Arrow Icon -->
          <svg class="w-4 h-4 ml-2 transition-transform duration-300" id="arrowDown" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <!-- Dropdown Menu -->
        <div id="studyDropdownMenu" class="absolute hidden bg-white shadow-md rounded-lg mt-2 w-40 z-10">
          <a href="#" class="block px-4 py-2 text-black hover:bg-red-600 hover:text-white">UK</a>
          <a href="#" class="block px-4 py-2 text-black hover:bg-red-600 hover:text-white">USA</a>
          <a href="#" class="block px-4 py-2 text-black hover:bg-red-600 hover:text-white">Canada</a>
          <a href="#" class="block px-4 py-2 text-black hover:bg-red-600 hover:text-white">Australia</a>
        </div>
      </div>

      <a href="#" class="text-black hover:border-b-2 hover:border-red-600">Blog</a>
      <a href="#" class="text-black hover:border-b-2 hover:border-red-600">Contact Us</a>
    </nav>

    <!-- Book Appointment Button (Desktop) -->
    <a href="#"
      class="hidden lg:block text-white bg-red-600 px-6 py-2 rounded-md hover:bg-red-700 transition">
      Book Appointment
    </a>

    <!-- Hamburger Menu Button (Mobile & Tablet) -->
    <button id="hamburgerMenu" class="lg:hidden text-black focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
  </div>

  <!-- Mobile/Tablet Navigation Menu (hidden by default) -->
  <nav id="mobileMenu" class="hidden lg:hidden bg-white shadow-md p-6 space-y-4 flex flex-col relative transition-all rounded-2xl duration-300 transform scale-95 opacity-0">
    <button id="closeMenu" class="absolute top-2 right-2 text-black focus:outline-none hidden">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
    <a href="#" class="text-black border-b-2 border-transparent hover:border-red-600 transition-all duration-300">Home</a>
    <a href="#" class="text-black border-b-2 border-transparent hover:border-red-600 transition-all duration-300">About Us</a>
    <a href="#" class="text-black border-b-2 border-transparent hover:border-red-600 transition-all duration-300">Our Services</a>

    <!-- Mobile Study Destination Dropdown Button -->
    <div class="relative">
      <button id="studyDropdownButtonMobile" class="text-black border-b-2 border-transparent hover:border-red-600 transition-all duration-300 flex items-center">
        Study Destination
        <!-- Down Arrow Icon -->
        <svg class="w-4 h-4 ml-2 transition-transform duration-300" id="arrowDownMobile" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
        </svg>
      </button>
      <div id="studyDropdownMenuMobile" class="absolute hidden bg-white shadow-md rounded-lg mt-2 w-40 z-10">
        <a href="#" class="block px-4 py-2 text-black hover:bg-red-600 hover:text-white">UK</a>
        <a href="#" class="block px-4 py-2 text-black hover:bg-red-600 hover:text-white">USA</a>
        <a href="#" class="block px-4 py-2 text-black hover:bg-red-600 hover:text-white">Canada</a>
        <a href="#" class="block px-4 py-2 text-black hover:bg-red-600 hover:text-white">Australia</a>
      </div>
    </div>

    <a href="#" class="text-black border-b-2 border-transparent hover:border-red-600 transition-all duration-300">Blog</a>
    <a href="#" class="text-black border-b-2 border-transparent hover:border-red-600 transition-all duration-300">Contact Us</a>
  </nav>

  <!-- Mobile/Tablet Book Appointment Button -->
  <a href="#"
    class="lg:hidden text-white bg-red-600 px-4 py-2 rounded-md hover:bg-red-700 transition block text-center mt-4 w-3/4 mx-auto">
    Book Appointment
  </a>
</header>

<script>
  // JavaScript to toggle dropdown visibility
  document.getElementById('studyDropdownButton').addEventListener('click', (event) => {
    const dropdownMenu = document.getElementById('studyDropdownMenu');
    const arrow = document.getElementById('arrowDown');
    dropdownMenu.classList.toggle('hidden'); // Toggle dropdown visibility
    arrow.classList.toggle('transform rotate-180'); // Rotate the arrow
    event.stopPropagation(); // Prevent event from bubbling up to the document
  });

  document.getElementById('studyDropdownButtonMobile').addEventListener('click', (event) => {
    const dropdownMenu = document.getElementById('studyDropdownMenuMobile');
    const arrow = document.getElementById('arrowDownMobile');
    dropdownMenu.classList.toggle('hidden'); // Toggle dropdown visibility
    arrow.classList.toggle('transform rotate-180'); // Rotate the arrow
    event.stopPropagation(); // Prevent event from bubbling up to the document
  });

  // Close dropdown when clicking outside of it
  document.addEventListener('click', (event) => {
    const dropdownMenu = document.getElementById('studyDropdownMenu');
    const dropdownMenuMobile = document.getElementById('studyDropdownMenuMobile');
    const button = document.getElementById('studyDropdownButton');
    const buttonMobile = document.getElementById('studyDropdownButtonMobile');
    const arrow = document.getElementById('arrowDown');
    const arrowMobile = document.getElementById('arrowDownMobile');

    // Check if the clicked element is not the dropdown or button, then close the dropdown
    if (!dropdownMenu.contains(event.target) && !button.contains(event.target)) {
      dropdownMenu.classList.add('hidden');
      arrow.classList.remove('transform', 'rotate-180');
    }
    if (!dropdownMenuMobile.contains(event.target) && !buttonMobile.contains(event.target)) {
      dropdownMenuMobile.classList.add('hidden');
      arrowMobile.classList.remove('transform', 'rotate-180');
    }
  });

  // JavaScript to toggle hamburger and close button with animation
  const hamburgerMenu = document.getElementById('hamburgerMenu');
  const mobileMenu = document.getElementById('mobileMenu');
  const closeMenu = document.getElementById('closeMenu');

  function openMenu() {
    mobileMenu.classList.remove('hidden');
    setTimeout(() => {
      mobileMenu.classList.remove('scale-95', 'opacity-0');
      mobileMenu.classList.add('scale-100', 'opacity-100');
    }, 10);
    hamburgerMenu.classList.add('hidden');
    closeMenu.classList.remove('hidden');
  }

  function closeMobileMenu() {
    mobileMenu.classList.remove('scale-100', 'opacity-100');
    mobileMenu.classList.add('scale-95', 'opacity-0');
    setTimeout(() => {
      mobileMenu.classList.add('hidden');
    }, 300);
    hamburgerMenu.classList.remove('hidden');
    closeMenu.classList.add('hidden');
  }

  hamburgerMenu.addEventListener('click', openMenu);
  closeMenu.addEventListener('click', closeMobileMenu);
</script>