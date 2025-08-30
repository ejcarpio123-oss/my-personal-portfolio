<!-- navbar -->
<nav class="hidden md:block bg-white/10 backdrop-blur-lg shadow-md fixed w-full">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
  
      <div class="flex items-center space-x-2">
        <span class="text-xl font-semibold">JE</span>
      </div>
  
      <div class="flex items-center space-x-6">
        <a href="#hero" class="font-semibold hover:text-blue-600 !no-underline p-5 link">Home</a>    
        <a href="#about" class="font-semibold hover:text-blue-600 !no-underline p-5 link">About</a>  
        <a href="#services" class="font-semibold hover:text-blue-600 !no-underline p-5 link">Services</a>  
        <a href="#skills" class="font-semibold hover:text-blue-600 !no-underline p-5 link">Skills</a>  
        <a href="#contact" class="font-semibold hover:text-blue-600 !no-underline p-5 link">Contact</a>  
      </div>

      <div>
        <a href="assets/Resume.pdf" target="_blank" class="border-2 border-gray-700 px-3 py-1 rounded shadow-md hover:bg-black hover:text-white hover:shadow-lg transition-all duration-300 cursor-pointer">Download CV</a>
      </div>

    </div>
  </div>
</nav>
<!-- navbar -->

<!-- offcanvas -->
<div x-data="{ open: false }" x-bind:class="open ? 'overflow-hidden fixed inset-0': ''" class="md:hidden">

    <nav class="fixed top-0 left-0 right-0 bg-white/10 backdrop-blur-lg shadow-md px-5 h-16 flex justify-between items-center z-[1000]">

      <a href="#" class="text-xl font-semibold !no-underline">JE</a>
      <button @click="open = true" class="focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </nav>

    <div
      x-show="open"
      x-transition.opacity
      @click="open = false"
      class="fixed inset-0 bg-black/50"
    ></div>

    <aside
      x-show="open"
      x-transition:enter="transition transform duration-300"
      x-transition:enter-start="-translate-x-full"
      x-transition:enter-end="translate-x-0"
      x-transition:leave="transition transform duration-300"
      x-transition:leave-start="translate-x-0"
      x-transition:leave-end="-translate-x-full"
      class="fixed top-0 left-0 w-64 h-full bg-white/10 backdrop-blur-md border border-white/10 text-white shadow-md p-2 space-y-2 z-[1001]"
    >


        <a href="#hero" class="flex gap-2 !no-underline block bg-gray-100/30 text-white py-2 px-3 mt-2 rounded hover:bg-gray-100/70 hover:!text-white transition">
          <i data-lucide="home"></i> Home
        </a>

        <a href="#about" class="flex gap-2 !no-underline block bg-gray-100/30 text-white py-2 px-3 mt-2 rounded hover:bg-gray-100/70 hover:!text-white transition">
          <i data-lucide="user"></i> About
        </a>

        <a href="#services" class="flex gap-2 !no-underline block bg-gray-100/30 text-white py-2 px-3 mt-2 rounded hover:bg-gray-100/70 hover:!text-white transition">
          <i data-lucide="briefcase"></i> Services
        </a>

        <a href="#skills" class="flex gap-2 !no-underline block bg-gray-100/30 text-white py-2 px-3 mt-2 rounded hover:bg-gray-100/70 hover:!text-white transition">
          <i data-lucide="settings"></i> Skills
        </a>

        <a href="#contact" class="flex gap-2 !no-underline block bg-gray-100/30 text-white py-2 px-3 mt-2 rounded hover:bg-gray-100/70 hover:!text-white transition">
          <i data-lucide="mail"></i> Contact
        </a>     

    </aside>
  </div>
<!-- offcanvas -->






