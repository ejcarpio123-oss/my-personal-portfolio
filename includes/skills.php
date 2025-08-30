<section id="skills" x-data="{ tab: 'stack' }" class="p-6 sm:h-180 flex flex-col justify-start items-center max-w-7xl mx-auto">

  <h2 class="text-2xl font-bold mb-5">Stack | Skills | Certificates | Projects</h2>
  <p class="leading-relaxed text-sm sm:text-base text-gray-700 text-center mb-5">
  An overview of the tools, frameworks, and applications I have used and continue to work with.
  </p>

  <div  class="flex flex-row gap-5 mb-5">

    <button @click="tab = 'project'" :class="tab === 'project' ? 'bg-gray-800 text-white': 'bg-white'" class="border border-gray-700 px-3 py-1 rounded shadow cursor-pointer hover:shadow-lg hover:-translate-y-1 transition-all duration-300">Projects</button>

    <button  @click="tab = 'stack'" :class="tab === 'stack' ? 'bg-gray-800 text-white': 'bg-white'" class="border border-gray-700 px-3 py-1 rounded shadow cursor-pointer hover:shadow-lg hover:-translate-y-1 transition-all duration-300">Stack</button>

    <button @click="tab = 'soft'" :class="tab === 'soft' ? 'bg-gray-800 text-white': 'bg-white'" class="border border-gray-700 px-3 py-1 rounded shadow cursor-pointer hover:shadow-lg hover:-translate-y-1 transition-all duration-300">Soft Skills</button>

    <button @click="tab = 'cert'" :class="tab === 'cert' ? 'bg-gray-800 text-white': 'bg-white'" class="border border-gray-700 px-3 py-1 rounded shadow cursor-pointer hover:shadow-lg hover:-translate-y-1 transition-all duration-300">Certifications</button>

  
  </div>
 
<div x-show="tab === 'stack'" class="w-full flex flex-col space-y-2">
  
<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 flex gap-5">

  <div class="rounded shadow border border-gray-300 p-6 flex flex-col gap-5 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
    <h1 class="text-lg font-bold text-center">Frontend</h1>
    <div class="grid grid-cols-2 gap-5">
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-html5-plain colored text-5xl"></i>
        <span class="text-base">HTML</span>
      </div>
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-css3-plain colored text-5xl"></i>
        <span class="text-base">CSS</span>
      </div>
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-javascript-plain colored text-5xl"></i>
        <span class="text-base">JavaScript</span>
      </div>
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-tailwindcss-plain colored text-5xl"></i>
        <span class="text-base">Tailwindcss</span>
      </div>
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-bootstrap-plain colored text-5xl"></i>
        <span class="text-base">Bootstrap</span>
      </div>
    </div>
  </div>

  <div class="rounded shadow border border-gray-300 p-6 flex flex-col gap-5 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
    <h1 class="text-lg font-bold text-center">Backend</h1>
    <div class="grid grid-cols-2 gap-5">
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-laravel-plain colored text-5xl"></i>
        <span class="text-base">Laravel</span>
      </div>
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-php-plain colored text-5xl"></i>
        <span class="text-base">PHP</span>
      </div>
    </div>
  </div>

  <div class="rounded shadow border border-gray-300 p-6 flex flex-col gap-5 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
    <h1 class="text-lg font-bold text-center">Database</h1>
    <div class="grid grid-cols-2 gap-5">
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-mysql-plain colored text-5xl"></i>
        <span class="text-base">MySQL</span>
      </div>
    </div> 
  </div>

  <div class="rounded shadow border border-gray-300 p-6 flex flex-col gap-5 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
    <h1 class="text-lg font-bold text-center">Other Tools</h1>
    <div class="grid grid-cols-2 gap-5">
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-aftereffects-plain colored text-5xl"></i>
        <span class="text-base">After Effects</span>
      </div>
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-alpinejs-plain colored text-5xl"></i>
        <span class="text-base">Alpine JS</span>
      </div>
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-github-original text-5xl"></i>
        <span class="text-base">Github</span>
      </div>
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-git-plain colored text-5xl"></i>
        <span class="text-base">Git</span>
      </div>
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-chartjs-plain colored text-5xl"></i>
        <span class="text-base">Chart JS</span>
      </div>
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-jquery-plain colored text-5xl"></i>
        <span class="text-base">JQuery</span>
      </div>
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-datatables-original text-5xl"></i>
        <span class="text-base">Data Tables</span>
      </div>
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-canva-original colored text-5xl"></i>
        <span class="text-base">Canva</span>
      </div>
      <div class="flex flex-col items-center justify-center">
        <i class="devicon-vscode-plain colored text-5xl"></i>
        <span class="text-base">VS Code</span>
      </div>
    </div> 
  </div>

</div>
  

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
        class="fixed inset-0 bg-black/90 flex items-center justify-center transition-opacity z-[1002]"
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

<div x-show="tab === 'project'" x-data="{
      open: false,
      index: 0,
      projects: [
        {
        name: 'Jose\'s Hotel',
        folder: 'hotel',
        thumbnail: 'hotel.png',
        description: 'A web-based system that allows customers to register with OTP verification, book rooms easily, check availability, receive booking confirmation emails, and manage their bookings. Admins can manage rooms, view bookings, and respond to customer messages.',
        images: ['hotel.png','hotel1.png','hotel2.png', 'hotel3.png', 'hotel4.png', 'hotel5.png'],
        stack: [
              { name: 'HTML' },
              { name: 'CSS' },
              { name: 'JavaScript' },
              { name: 'Tailwind' },
              { name: 'PHP' },
              { name: 'MySQL' },
              { name: 'JQuery' },
              { name: 'Data Tables' },
              { name: 'SweetAlert2' },
              { name: 'Alphine' },
              { name: 'PHP Mailer' }
           ]
        }, 
        {
        name: 'Jose\'s Resto',
        folder: 'ecommerce',
        thumbnail: 'ecommerce.png',
        description: 'A web-based e-commerce system where customers can view featured products, see product details, add to cart, update quantities, and check a summary of their orders. Payments are supported via COD, GCash, and Paymaya. Customers can view their orders, personal details, and interact with an AI chat. Registration is secured with email OTP verification. Admins can manage products, orders, ratings, analytics, and interact with customers efficiently.',
        images: ['ecommerce.png','ecommerce1.png','ecommerce2.png', 'ecommerce3.png', 'ecommerce4.png', 'ecommerce5.png', 'ecommerce6.png', 'ecommerce7.png', 'ecommerce8.png'],
          stack: [
              { name: 'HTML' },
              { name: 'CSS' },
              { name: 'JavaScript' },
              { name: 'Tailwind' },
              { name: 'PHP' },
              { name: 'MySQL' },
              { name: 'JQuery' },
              { name: 'Data Tables' },
              { name: 'SweetAlert2' },
              { name: 'Alphine' },
              { name: 'Bootstrap' },
              { name: 'GCash' },
              { name: 'Paymaya' },
              { name: 'Groq' },
              { name: 'PHP Mailer' }
           ]
        }, {
        name: 'My Personal Portfolio',
        folder: 'portfolio',
        thumbnail: 'portfolio.png',
        description: 'A personal portfolio website showcasing my projects, skills, and design style. Built using HTML, CSS, Tailwind, and Alpine.js, it demonstrates responsive layouts, interactive components, and clean UI design.',
        images: ['portfolio.png', 'portfolio2.png', 'portfolio3.png', 'portfolio4.png', 'portfolio5.png', 'portfolio6.png', 'portfolio7.png'],
        stack: [
          { name: 'HTML' },
              { name: 'CSS' },
              { name: 'Alphine' },
              { name: 'Tailwind' },
          ]
          }
           ],
        gallery: [],
      prev() { this.index = (this.index - 1 + this.gallery.length) % this.gallery.length },
      next() { this.index = (this.index + 1) % this.gallery.length },
      openGallery(images) { this.gallery = images; this.index = 0; this.open = true }
    }" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">

    <!-- Thumbnail -->
    <template x-for="project in projects" :key="project.name">
        <div class="flex flex-col items-start gap-2 cursor-pointer p-4 bg-white border border-gray-300 shadow rounded hover:-translate-y-1 transition-all duration-300 hover:shadow-lg" @click="openGallery(project.images)">
          <img :src="`assets/${project.folder}/${project.thumbnail}`" :alt="project.name" class="w-full h-48 object-cover border shadow hover:shadow-lg transition-all duration-300">
          
          <div class="flex flex-row items-center gap-1">
            <span class="font-medium">Project Title:</span><p class="font-bold text-gray-900" x-text="project.name"></p>
          </div>

          <p class="text-xs text-black font-medium" x-text="project.description"></p>

          <div class="flex items-center flex-wrap gap-2">
              <template x-for="tech in project.stack" :key="tech.name">
                  <span x-text="tech.name" class="px-2 py-1 bg-gray-900 text-white text-xs"></span>
              </template>
          </div>

        </div>
    </template>


    <div x-show="open" @click.self="open = false" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/90 flex items-center justify-center z-[1003]">
        <div class="relative">
            <img :src="`assets/${projects.find(p => p.images.includes(gallery[index])).folder}/${gallery[index]}`" class="max-h-[80vh] max-w-[80vw] rounded shadow-lg" alt="">

       
            <button @click="prev()" class="absolute left-2 top-1/2 -translate-y-1/2 text-white bg-gray-800 bg-opacity-50 px-3 py-1 rounded hover:bg-opacity-80">Prev</button>

            <button @click="next()" class="absolute right-2 top-1/2 -translate-y-1/2 text-white bg-gray-800 bg-opacity-50 px-3 py-1 rounded hover:bg-opacity-80">Next</button>
        </div>
    </div>
</div>


</section>