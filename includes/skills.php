<section id="skills" x-data="{ tab: 'stack' }" class="p-6 sm:h-180 flex flex-col justify-start items-center max-w-7xl mx-auto bg-gray-200">

  <h2 class="text-2xl font-bold mb-5">My Skills/Stack</h2>
  <p class="leading-relaxed text-sm sm:text-base text-gray-700 text-center mb-5">
  An overview of the tools, frameworks, and applications I have used and continue to work with.
  </p>

  <div  class="flex flex-row gap-5 mb-5">
    <button  @click="tab = 'stack'" :class="tab === 'stack' ? 'bg-gray-800 text-white': 'bg-white'" class="px-3 py-1 rounded-full shadow">Stack</button>

    <button @click="tab = 'soft'" :class="tab === 'soft' ? 'bg-gray-800 text-white': 'bg-white'" class="px-3 py-1 rounded-full shadow">Soft Skills</button>

    <button @click="tab = 'cert'" :class="tab === 'cert' ? 'bg-gray-800 text-white': 'bg-white'" class="px-3 py-1 rounded-full shadow">Certifications</button>
  
  </div>
 
<div x-show="tab === 'stack'" class="w-full flex flex-col space-y-2">
  
  <!-- Frontend -->
  <section>
    <h3 class="text-lg font-semibold text-gray-800">Frontend</h3>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-8 gap-5">
      
      <!-- HTML -->
      <div class="group rounded bg-white border border-gray-300 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 p-2 flex flex-col items-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" class="w-10 h-10" alt="HTML" />
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">HTML5</span>
      </div>

      <!-- CSS -->
      <div  class="group rounded bg-white border border-gray-300 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 p-2 flex flex-col items-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" class="w-10 h-10" alt="CSS" />
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">CSS3</span>
      </div>

      <!-- JavaScript -->
      <div class="group rounded bg-white border border-gray-300 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 p-2 flex flex-col items-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="w-10 h-10" alt="JavaScript" />
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">JavaScript</span>
      </div>

      <!-- Tailwind -->
      <div  class="group rounded bg-white border border-gray-300 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 p-2 flex flex-col items-center">
        <img src="https://img.icons8.com/color/48/tailwind_css.png" class="w-10 h-10" alt="Tailwind" />
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">Tailwind</span>
      </div>

      <!-- Bootstrap -->
      <div class="group rounded bg-white border border-gray-300 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 p-2 flex flex-col items-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" class="w-10 h-10" alt="Bootstrap" />
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">Bootstrap</span>
      </div>
    </div>
  </section>

  <!-- Backend -->
  <section>
    <h3 class="text-lg font-semibold text-gray-800">Backend</h3>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-8 gap-5">

      <!-- Laravel -->
      <div class="group rounded bg-white border border-gray-300 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 p-2 flex flex-col items-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" class="w-10 h-10" alt="Laravel" />
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">Laravel</span>
      </div>

      <!-- PHP -->
      <div class="group rounded bg-white border border-gray-300 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 p-2 flex flex-col items-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" class="w-10 h-10" alt="PHP" />
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">PHP</span>
      </div>
    </div>
  </section>

  <section >
    <h3 class="text-lg font-semibold text-gray-800">Database</h3>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-8 gap-5">
      <div class="group rounded bg-white border border-gray-300 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 p-2 flex flex-col items-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" class="w-10 h-10" alt="MySQL" />
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">MySQL</span>
      </div>
    </div>
  </section>

 
  <section>
    <h3  class="text-lg font-semibold text-gray-800">Other Tools</h3>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-8 gap-5">

      <div class="group rounded bg-white border border-gray-300 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 p-2 flex flex-col items-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/jquery/jquery-original.svg" class="w-10 h-10" alt="JQuery" />
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">JQuery</span>
      </div>

      <div class="group rounded bg-white border border-gray-300 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 p-2 flex flex-col items-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/chartjs/chartjs-original.svg" class="w-10 h-10" alt="Chart JS" />
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">Chart JS</span>
      </div>

      <div class="group rounded bg-white border border-gray-300 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 p-2 flex flex-col items-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/aftereffects/aftereffects-original.svg" class="w-10 h-10" alt="After Effects" />
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">After Effects</span>
      </div>

      <div class="group rounded bg-white border border-gray-300 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-2 flex flex-col items-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/alpinejs/alpinejs-original.svg" class="w-10 h-10" alt="Alphine" />
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">Alphine</span>
      </div>
      
    </div>
  </section>

</div>

  <div x-show="tab === 'soft'" class="w-full grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-5">
     <div class="group p-6 bg-white shadow border border-gray-300 rounded flex flex-row items-center gap-3 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
        <i data-lucide="messages-square" class="text-blue-500 w-6 h-6"></i>
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">Communication</span>
      </div>

      <div  class="group p-6 bg-white shadow border border-gray-300 rounded flex flex-row items-center gap-3 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
        <i data-lucide="users" class="text-green-500 w-6 h-6"></i>
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">Teamwork</span>
      </div>

      <div class="group p-6 bg-white shadow border border-gray-300 rounded flex flex-row items-center gap-3 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
        <i data-lucide="lightbulb" class="text-yellow-500 w-6 h-6"></i>
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">Problem Solving</span>
      </div>

      <div  class="group p-6 bg-white shadow border border-gray-300 rounded flex flex-row items-center gap-3 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
        <i data-lucide="repeat" class="text-purple-500 w-6 h-6"></i>
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">Adaptability</span>
      </div>

      <div class="group p-6 bg-white shadow border border-gray-300 rounded flex flex-row items-center gap-3 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
        <i data-lucide="clock" class="text-red-500 w-6 h-6"></i>
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">Time Management</span>
      </div>

      <div class="group p-6 bg-white shadow border border-gray-300 rounded flex flex-row items-center gap-3 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
        <i data-lucide="rocket" class="text-indigo-500 w-6 h-6"></i>
        <span class="text-sm font-medium text-gray-700 group-hover:text-black">Fast Learner</span>
      </div>

  </div>


  <div x-show="tab === 'cert'" x-data="{ open: false, imgSrc: '' }">
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-5 gap-5">
      <template x-for="cert in ['Cisco.jpg','Cybersecurity.jpg','DCM.jpg','Networking.jpg','Network Security.jpg','Excel Associate.jpg','PowerPoint Associate.jpg','Word Associate.jpg','MOSA.jpg']" :key="cert">
        <div class="border shadow border-gray-300 hover:shadow-lg cursor-pointer hover:-translate-y-1 transition-all duration-300">
          <img :src="`assets/certificates/${cert}`" @click="imgSrc = `assets/certificates/${cert}`; open = true" alt="">
        </div>
      </template>
    </div>

    <!-- Modal -->
    <div 
        x-show="open" 
        @click.self="open = false" 
        class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 transition-opacity"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
      <img :src="imgSrc" class="max-h-[80vh] max-w-[80vw] rounded shadow-lg" alt="">
    </div>
</div>

</section>