
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JH Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Permanent+Marker&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .line { transition: all 0.3s ease }
    .open.line1 { transform: rotate(45deg) translate(5px, 6px) }
    .open.line2 { opacity: 0 }
    .open.line3 { transform: rotate(-45deg) translate(5px, -6px) }
    #menu { transition: transform 0.3s ease }
    .menu-closed { transform: translateX(100%) }
    .menu-open { transform: translateX(0) }
  </style>
</head>
<body>
  <nav class="w-full bg-[#101827]/90 border-b border-b-white/20 backdrop-blur-md shadow-sm px-6 md:px-20 py-5 flex justify-between items-center sticky top-0 z-50">
    <h1 class="text-2xl uppercase font-black text-white">JH Portfolio</h1>
    <ul class="hidden md:flex items-center gap-10 text-white">
      <li><a href="#Home" class="font-bold text-sm uppercase hover:bg-blue-700 hover:text-white px-4 py-2 rounded-full transition">Home</a></li>
      <li><a href="#About" class="font-bold text-sm uppercase hover:bg-blue-700 hover:text-white px-4 py-2 rounded-full transition">About</a></li>
      <li><a href="#Skills" class="font-bold text-sm uppercase hover:bg-blue-700 hover:text-white px-4 py-2 rounded-full transition">Skills</a></li>
      <li><a href="#Experience" class="font-bold text-sm uppercase hover:bg-blue-700 hover:text-white px-4 py-2 rounded-full transition">Experience</a></li>
      <li><a href="#contact" class="font-bold text-sm uppercase hover:bg-blue-700 hover:text-white px-4 py-2 rounded-full transition">Contact</a></li>
    </ul>
    <button id="hamBtn" class="w-10 h-10 flex flex-col justify-center items-center gap-[5px] bg-gray-100 rounded-full hover:bg-gray-200 transition z-50">
      <div class="line line1 w-5 h-[2.5px] bg-black rounded"></div>
      <div class="line line2 w-5 h-[2.5px] bg-black rounded"></div>
      <div class="line line3 w-5 h-[2.5px] bg-black rounded"></div>
    </button>
  </nav>
  <div id="blur" class="hidden fixed inset-0 top-[72px] bg-blur /30 backdrop-blur-sm z-30"></div>
  <div id="menu" class="hidden fixed top-[72px] right-0 w-[80%] max-w-[320px] h-[calc(100vh-72px)] bg-gradient-to-b from-zinc-900 to-black p-8 flex flex-col gap-6 z-40 shadow-2xl menu-closed">
    <h1 class="text-xl font-black uppercase tracking-widest text-white/50">Menu</h1>
    <ul class="flex flex-col gap-2">
      <li><a href="#Home" class="block py-4 px-4 text-white font-bold uppercase text-lg hover:bg-white hover:text-black rounded-xl transition-all">Home</a></li>
      <li><a href="#About" class="block py-4 px-4 text-white font-bold uppercase text-lg hover:bg-white hover:text-black rounded-xl transition-all">About</a></li>
      <li><a href="#Skills" class="block py-4 px-4 text-white font-bold uppercase text-lg hover:bg-white hover:text-black rounded-xl transition-all">Skills</a></li>
      <li><a href="#Experience" class="block py-4 px-4 text-white font-bold uppercase text-lg hover:bg-white hover:text-black rounded-xl transition-all">Experience</a></li>
      <div class="h-[1px] bg-white/10 my-4"></div>
      <li class="py-2 px-4 text-white/60 font-bold text-sm uppercase">Other Information</li>
      <li><a class="block py-3 px-4 text-white hover:bg-blue-700 rounded-xl transition cursor-pointer">Personal Info</a></li>
      <li><a class="block py-3 px-4 text-white hover:bg-blue-700 rounded-xl transition cursor-pointer">Address</a></li>
      <li><a class="block py-3 px-4 text-white hover:bg-blue-700 rounded-xl transition cursor-pointer">Habits</a></li>
    </ul>
  </div>
  <section id="Home" class="w-full min-h-[100vh] flex flex-col md:flex-row justify-between items-center px-6 md:px-20 bg-[#101827] rounded-xl">
    <div class="w-full md:w-1/2">
      <h1 class="text-4xl md:text-6xl font-black uppercase leading-tight text-white">Hi I'm Jhan Jhan <span class="text-blue-700">Web Developer</span></h1>
      <p class="text-gray-500 font-bold text-sm mt-2">I help Business build fast clean, and useful websites that solve real problems</p>
      <div class="mt-8 flex gap-4">
        <a href="#Projects" class="bg-blue-700 text-white px-8 py-3 rounded-full font-bold hover:bg-red-800 hover:scale-105 transition-all duration-300">View Projects</a>
        <a href="#Contact" class="border-2 border-blue-700 text-blue-700 px-8 py-3 rounded-full font-bold hover:bg-red-800 hover:scale-105 transition-all duration-300 hover:text-white">Contact Me</a>
      </div>
    </div>
    <div class="w-full md:w-1/2 flex justify-center mt-8 md:mt-0">
      <img id="myPic" src="asset/jh.png" class="h-[60vh] md:h-[90vh] object-contain">
    </div>
  </section>
  <section id="About" class="reveal opacity-0 transition-all translate-y-12 transition-all duration-700 ease-out w-full min-h-screen px-6 md:px-20 py-20 bg-zinc-50 rounded-lg flex flex-col md:flex-row justify-between items-center gap-12">
    <div class="w-full md:w-[45%] flex justify-center">
      <img src="asset/rest.png" class="w-[100%] md:w-full max-w-[400px] rounded-[30px] object-cover shadow-2xl hover:scale-105">
    </div>
    <div class="w-full md:w-[55%] flex flex-col gap-6">
      <h1 class="text-3xl text-center font-black tracking-[0.3em] text-blue-700 uppercase">About Me</h1>
      <h1 class="text-4xl md:text-5xl font-black uppercase leading-tight whitespace-nowrap">Aspiring <span class="text-blue-700">Web Developer</span></h1>
      <p class="text-gray-500 font-medium leading-relaxed">I'm Jhan Jhan from Bohol Passionate in building reliable and resourceful website. And Also Creating A Capstone Project <span id="moreText" class="hidden">Driven by innovation and meticulous attention to detail, I am an aspiring web developer from Cebu dedicated to crafting responsive, high-performance, user-centric, and scalable digital experiences.</span></p>
      <div class="mt-5 flex gap-5 items-center justify-center">
        <a href="#See" id="SeeMore" class="bg-blue-800 text-white uppercase px-8 py-3 rounded-lg w-1/2 text-center font-bold text-2xl hover:bg-red-800 hover:scale-105 cursor-pointer transition-all duration-300">SeeMore</a>
      </div>
    </div>
  </section>

  <section id="Skills" class="w-full min-h-screen bg-[#0A0E27] p-6 md:px-20 py-20 flex flex-col items-center rounded-lg">
    <div class="mb-12 text-center">
      <h1 class="text-5xl text-white font-black uppercase tracking-tight">My <span class="text-blue-600">Skills</span></h1>
      <p class="text-zinc-400 mt-3 font-bold">What I use to build websites</p>
      <div class="mt-4 h-1 w-20 bg-blue-600 rounded-full mx-auto"></div>
    </div>
    <div class="w-full max-w-6xl bg-[#101827] border border-zinc-800 rounded-[32px] p-8 md:p-10 shadow-2xl">
      <!-- FRONT END -->
      <div class="mb-12">
        <div class="flex items-center gap-3 mb-8">
          <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-black">F</div>
          <h2 class="text-2xl font-black text-white uppercase tracking-widest">Front End</h2>
          <div class="flex-1 h-[1px] bg-white/10 ml-4"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="group bg-white rounded-2xl p-6 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(37,99,235,0.3)] hover:bg-zinc-900 transition-all duration-300 cursor-pointer">
            <div class="flex justify-between items-start"><img src="asset/html1.png" class="w-12 h-12 object-contain"><span class="text-xs font-black bg-red-100 text-red-600 px-3 py-1 rounded-full">90%</span></div>
            <h3 class="text-xl font-black mt-4 group-hover:text-white text-zinc-900">HTML</h3>
            <p class="text-sm text-zinc-500 mt-2 group-hover:text-zinc-400">Clean, semantic & SEO-friendly markup.</p>
            <div class="mt-4 w-full h-2 bg-zinc-100 rounded-full group-hover:bg-zinc-800"><div class="h-full w-[90%] bg-red-500 rounded-full"></div></div>
          </div>
          <div class="group bg-white rounded-2xl p-6 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(37,99,235,0.3)] hover:bg-zinc-900 transition-all duration-300 cursor-pointer">
            <div class="flex justify-between items-start"><img src="asset/css.png" class="w-12 h-12 object-contain"><span class="text-xs font-black bg-blue-100 text-blue-600 px-3 py-1 rounded-full">85%</span></div>
            <h3 class="text-xl font-black mt-4 group-hover:text-white text-zinc-900">CSS / Tailwind</h3>
            <p class="text-sm text-zinc-500 mt-2 group-hover:text-zinc-400">Responsive, modern UI design.</p>
            <div class="mt-4 w-full h-2 bg-zinc-100 rounded-full group-hover:bg-zinc-800"><div class="h-full w-[85%] bg-blue-500 rounded-full"></div></div>
          </div>
          <div class="group bg-white rounded-2xl p-6 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(234,179,8,0.3)] hover:bg-zinc-900 transition-all duration-300 cursor-pointer">
            <div class="flex justify-between items-start"><img src="asset/JS.png" class="w-12 h-12 object-contain"><span class="text-xs font-black bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full">80%</span></div>
            <h3 class="text-xl font-black mt-4 group-hover:text-white text-zinc-900">JavaScript</h3>
            <p class="text-sm text-zinc-500 mt-2 group-hover:text-zinc-400">Interactive logic & API.</p>
            <div class="mt-4 w-full h-2 bg-zinc-100 rounded-full group-hover:bg-zinc-800"><div class="h-full w-[80%] bg-yellow-400 rounded-full"></div></div>
          </div>
        </div>
      </div>

      <!-- BACK END -->
      <div class="mb-12">
        <div class="flex items-center gap-3 mb-8">
          <div class="w-10 h-10 rounded-full bg-green-600 flex items-center justify-center text-white font-black">B</div>
          <h2 class="text-2xl font-black text-white uppercase tracking-widest">Back End</h2>
          <div class="flex-1 h-[1px] bg-white/10 ml-4"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="group bg-zinc-900 border border-zinc-800 rounded-2xl p-6 hover:-translate-y-2 hover:bg-white hover:shadow-[0_20px_40px_rgba(255,255,255,0.15)] transition-all duration-300 cursor-pointer">
            <img src="asset/maria1.png" class="w-12 h-12 object-contain">
            <h3 class="text-lg font-black mt-4 text-white group-hover:text-black">MariaDB</h3>
            <p class="text-sm text-zinc-500 mt-1 group-hover:text-zinc-600">Fast & secure data storage.</p>
            <div class="mt-4 w-full h-2 bg-zinc-100 rounded-full group-hover:bg-zinc-800"><div class="h-full w-[90%] bg-orange-500 rounded-full"></div></div>
          </div>
          <div class="group bg-zinc-900 border border-zinc-800 rounded-2xl p-6 hover:-translate-y-2 hover:bg-white hover:shadow-[0_20px_40px_rgba(255,255,255,0.15)] transition-all duration-300 cursor-pointer">
            <img src="asset/sql1.png" class="w-12 h-12 object-contain">
            <h3 class="text-lg font-black mt-4 text-white group-hover:text-black">MySQL</h3>
            <p class="text-sm text-zinc-500 mt-1 group-hover:text-zinc-600">Reliable SQL database.</p>
          <div class="mt-4 w-full h-2 bg-zinc-100 rounded-full group-hover:bg-zinc-800"><div class="h-full w-[90%] bg-black rounded-full"></div> </div>
          </div>
          <div class="group bg-zinc-900 border border-zinc-800 rounded-2xl p-6 hover:-translate-y-2 hover:bg-white hover:shadow-[0_20px_40px_rgba(255,255,255,0.15)] transition-all duration-300 cursor-pointer">
            <img src="asset/php1.png" class="w-12 h-12 object-contain">
            <h3 class="text-lg font-black mt-4 text-white group-hover:text-black">PHP</h3>
            <p class="text-sm text-zinc-500 mt-1 group-hover:text-zinc-600">Server logic & DB connection.</p>
            <div class="mt-4 w-full h-2 bg-zinc-100 rounded-full group-hover:bg-zinc-800"><div class="h-full w-[90%] bg-blue-500 rounded-full"></div></div>
          </div>
        </div>
      </div>

      <!-- FRAMEWORKS -->
      <div>
        <div class="flex items-center gap-3 mb-8">
          <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
            <span class="text-black font-black text-lg">F</span>
          </div>
          <h2 class="text-2xl font-black uppercase tracking-widest text-white">Frameworks</h2>
          <div class="flex-1 h-[1px] bg-white/10 ml-4"></div>
        </div> 
</div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="group bg-zinc-900 border border-zinc-800 rounded-2xl p-6 hover:-translate-y-2 hover:bg-white transition-all duration-300 cursor-pointer">
            <img src="asset/vues.png" class="w-12 h-12 object-contain" onerror="this.style.display='none'">
            <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center text-white font-black text-xl">V</div>
            <h3 class="text-lg font-black mt-4 text-white group-hover:text-black">Vue.js</h3>
            <p class="text-sm text-zinc-500 mt-1 group-hover:text-zinc-600">Progressive JS Framework</p>
           
<div class="group mt-4 h-2 w-full rounded-full bg-zinc-100 transition-colors duration-300 hover:bg-zinc-800">
  <div class="h-full w-[90%] cursor-pointer rounded-full bg-orange-800 transition-all duration-300 hover:shadow-[0_20px_40px_rgba(255,255,255,0.15)]"></div>
</div>

          </div>
          <div class="group bg-zinc-900 border border-zinc-800 rounded-2xl p-6 hover:-translate-y-2 hover:bg-white transition-all duration-300 cursor-pointer">
            <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center text-white font-black">R</div>
            <h3 class="text-lg font-black mt-4 text-white group-hover:text-black">React.js</h3>
            <p class="text-sm text-zinc-500 mt-1 group-hover:text-zinc-600">Component-based UI</p>
              
<div class="group mt-4 h-2 w-full rounded-full bg-zinc-100 transition-colors duration-300 hover:bg-zinc-800">
  <div class="h-full w-[90%] cursor-pointer rounded-full bg-red-500 transition-all duration-300 hover:shadow-[0_20px_40px_rgba(255,255,255,0.15)]"></div>
</div>

          </div>
          <div class="group bg-zinc-900 border border-zinc-800 rounded-2xl p-6 hover:-translate-y-2 hover:bg-white transition-all duration-300 cursor-pointer">
            <div class="w-12 h-12 bg-black rounded-xl flex items-center justify-center text-white font-black border border-white/20">N</div>
            <h3 class="text-lg font-black mt-4 text-white group-hover:text-black">Node.js</h3>
            <p class="text-sm text-zinc-500 mt-1 group-hover:text-zinc-600">Server-side JS</p>
            <div class="group mt-4 h-2 rounded-full bg-zinc-100 transition-colors duartion-300 hover:bg-zinc-800">
              <div class="h-full w-[90%] cursor-pointer rounded-full bg-green-800 transition-all duration-300 hover:shadow-[0_20px_40px_rgba(255,255,255,0.5)]"></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- EXPERIENCE -->
  <section id="Experience" class="w-full min-h-screen bg-[#0A0E27] p-6 md:px-20 py-20 flex flex-col items-center rounded-lg">
  
  <!-- HEADER - may reveal -->
  <div class="reveals opacity-0 translate-y-12 transition-all duration-700 mb-12 text-center">
    <h1 class="text-3xl md:text-4xl uppercase font-black text-white tracking-tighter">Experience Through Learning</h1>
    <p class="text-2xl font-bold text-center mt-5 text-green-500">Making Website Daily</p>
    <div class="mt-4 h-1 w-20 bg-green-500 rounded-full mx-auto"></div>
  </div>

  <!-- PARENT CONTAINER - WALA NG REVEALS DITO -->
  <div class="w-full max-w-6xl bg-[#101827] border border-zinc-800 rounded-[32px] p-8 md:p-10 shadow-2xl">
    <div class="flex flex-row flex-wrap gap-10 justify-center items-stretch">

      <!-- CARD 1 -->
      <div class="reveals opacity-0 translate-y-12 transition-all duration-700 delay-0 relative w-80 min-h-[380px] group">
        <div class="absolute -bottom-3 -right-3 w-full h-full bg-blue-600 rounded-2xl rotate-3 group-hover:rotate-6 transition-all duration-300 z-0"></div>
        <div class="relative z-10 w-full h-full min-h-[380px] rounded-2xl bg-black border border-[#27272A] p-7 flex flex-col shadow-xl group-hover:-translate-y-1 transition-all duration-300">
          <div class="flex items-center gap-3 mb-5">
            <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold text-sm">1</div>
            <div class="w-11 h-11 rounded-xl bg-black flex items-center justify-center"><img src="asset/html1.png"></div>
            <div class="w-11 h-11 rounded-xl bg-black flex items-center justify-center"><img src="asset/css.png"></div>
            <div class="w-11 h-11 rounded-xl bg-black flex items-center justify-center"><img src="asset/tailwind1.png"></div>
          </div>
          <h3 class="text-white font-bold text-xl">January 2022 - Self Thought</h3>
          <p class="text-zinc-400 font-bold mt-2 text-sm">Learning Front End</p>
          <p class="text-zinc-400 mt-5 text-sm font-bold">My Experience</p>
          <p class="text-zinc-300 text-[13px] leading-relaxed mt-4">Focused on self-learning the fundamentals of front-end, understanding Tailwind and building my first responsive layout.</p>
          <div class="flex gap-2 mt-auto pt-6">
            <span class="text-[10px] bg-white text-black px-3 py-1.5 rounded-full font-bold">HTML</span>
            <span class="text-[10px] bg-green-500 text-black px-3 py-1.5 rounded-full font-bold">CSS</span>
            <span class="text-[10px] bg-zinc-800 text-white px-3 py-1.5 rounded-full font-bold border border-zinc-700">Tailwind</span>
          </div>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="reveals opacity-0 translate-y-12 transition-all duration-700 delay-200 relative w-80 min-h-[380px] group">
        <div class="absolute -bottom-3 -right-3 w-full h-full bg-green-600 rounded-2xl rotate-2 group-hover:rotate-6 transition-all duration-300 z-0"></div>
        <div class="relative z-10 w-full h-full min-h-[380px] rounded-2xl bg-black border border-[#27272A] p-7 flex flex-col shadow-xl group-hover:-translate-y-1 transition-all duration-300">
          <div class="flex items-center gap-3 mb-5">
            <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold text-sm">2</div>
            <div class="w-11 h-11 rounded-xl bg-zinc-800 flex items-center justify-center"><img src="asset/JS.png"></div>
            <div class="w-11 h-11 rounded-full bg-white flex items-center justify-center"><img src="asset/maria1.png"></div>
            <div class="w-11 h-11 rounded-full bg-white flex items-center justify-center"><img src="asset/php1.png"></div>
          </div>
          <h3 class="text-white font-bold text-xl">May 2025 - Self Thought</h3>
          <p class="text-zinc-400 mt-2 text-sm font-bold">Learning Back End</p>
          <p class="text-zinc-400 mt-5 text-sm font-bold">My Experience</p>
          <p class="text-zinc-300 text-[13px] leading-relaxed mt-4">Started learning back-end, how server works, API routes, and connecting front-end to back-end.</p>
          <div class="flex gap-2 mt-auto pt-6">
            <span class="text-[10px] bg-white text-black px-3 py-1.5 rounded-full font-bold">MariaDB</span>
            <span class="text-[10px] bg-white text-black px-3 py-1.5 rounded-full font-bold">MySQL</span>
            <span class="text-[10px] bg-white text-black px-3 py-1.5 rounded-full font-bold">PHP</span>
          </div><section id="Experience" class="w-full min-h-screen bg-[#0A0E27] p-6 md:px-20 py-20 flex flex-col items-center rounded-lg">
  
  <!-- HEADER - may reveal -->
  <div class="reveals opacity-0 translate-y-12 transition-all duration-700 mb-12 text-center">
    <h1 class="text-3xl md:text-4xl uppercase font-black text-white tracking-tighter">Experience Through Learning</h1>
    <p class="text-2xl font-bold text-center mt-5 text-green-500">Making Website Daily</p>
    <div class="mt-4 h-1 w-20 bg-green-500 rounded-full mx-auto"></div>
  </div>

  <!-- PARENT CONTAINER - WALA NG REVEALS DITO -->
  <div class="w-full max-w-6xl bg-[#101827] border border-zinc-800 rounded-[32px] p-8 md:p-10 shadow-2xl">
    <div class="flex flex-row flex-wrap gap-10 justify-center items-stretch">

      <!-- CARD 1 -->
      <div class="reveals opacity-0 translate-y-12 transition-all duration-700 delay-0 relative w-80 min-h-[380px] group">
        <div class="absolute -bottom-3 -right-3 w-full h-full bg-blue-600 rounded-2xl rotate-3 group-hover:rotate-6 transition-all duration-300 z-0"></div>
        <div class="relative z-10 w-full h-full min-h-[380px] rounded-2xl bg-black border border-[#27272A] p-7 flex flex-col shadow-xl group-hover:-translate-y-1 transition-all duration-300">
          <div class="flex items-center gap-3 mb-5">
            <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold text-sm">1</div>
            <div class="w-11 h-11 rounded-xl bg-black flex items-center justify-center"><img src="asset/html1.png"></div>
            <div class="w-11 h-11 rounded-xl bg-black flex items-center justify-center"><img src="asset/css.png"></div>
            <div class="w-11 h-11 rounded-xl bg-black flex items-center justify-center"><img src="asset/tailwind1.png"></div>
          </div>
          <h3 class="text-white font-bold text-xl">January 2022 - Self Thought</h3>
          <p class="text-zinc-400 font-bold mt-2 text-sm">Learning Front End</p>
          <p class="text-zinc-400 mt-5 text-sm font-bold">My Experience</p>
          <p class="text-zinc-300 text-[13px] leading-relaxed mt-4">Focused on self-learning the fundamentals of front-end, understanding Tailwind and building my first responsive layout.</p>
          <div class="flex gap-2 mt-auto pt-6">
            <span class="text-[10px] bg-white text-black px-3 py-1.5 rounded-full font-bold">HTML</span>
            <span class="text-[10px] bg-green-500 text-black px-3 py-1.5 rounded-full font-bold">CSS</span>
            <span class="text-[10px] bg-zinc-800 text-white px-3 py-1.5 rounded-full font-bold border border-zinc-700">Tailwind</span>
          </div>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="reveals opacity-0 translate-y-12 transition-all duration-700 delay-200 relative w-80 min-h-[380px] group">
        <div class="absolute -bottom-3 -right-3 w-full h-full bg-green-600 rounded-2xl rotate-2 group-hover:rotate-6 transition-all duration-300 z-0"></div>
        <div class="relative z-10 w-full h-full min-h-[380px] rounded-2xl bg-black border border-[#27272A] p-7 flex flex-col shadow-xl group-hover:-translate-y-1 transition-all duration-300">
          <div class="flex items-center gap-3 mb-5">
            <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold text-sm">2</div>
            <div class="w-11 h-11 rounded-xl bg-zinc-800 flex items-center justify-center"><img src="asset/JS.png"></div>
            <div class="w-11 h-11 rounded-full bg-white flex items-center justify-center"><img src="asset/maria1.png"></div>
            <div class="w-11 h-11 rounded-full bg-white flex items-center justify-center"><img src="asset/php1.png"></div>
          </div>
          <h3 class="text-white font-bold text-xl">May 2025 - Self Thought</h3>
          <p class="text-zinc-400 mt-2 text-sm font-bold">Learning Back End</p>
          <p class="text-zinc-400 mt-5 text-sm font-bold">My Experience</p>
          <p class="text-zinc-300 text-[13px] leading-relaxed mt-4">Started learning back-end, how server works, API routes, and connecting front-end to back-end.</p>
          <div class="flex gap-2 mt-auto pt-6">
            <span class="text-[10px] bg-white text-black px-3 py-1.5 rounded-full font-bold">MariaDB</span>
            <span class="text-[10px] bg-white text-black px-3 py-1.5 rounded-full font-bold">MySQL</span>
            <span class="text-[10px] bg-white text-black px-3 py-1.5 rounded-full font-bold">PHP</span>
          </div>
               <a href="https:// www.w3schools.com/sql/" target="_blank ">    
               <span class="text-[10px] bg-zinc-800 text-300 px-3 py-1.5 rounded-full font-bold border border-zinc-700 hover:bg-white hover:text-black hover:scale-105 cursor-pointer transition-all duration-300">mySQL</span>
               </a>
               <span class="text-[10px] bg-zinc-800 text-zinc-300 px-3 py-1.5 rounded-full font-bold border border-zinc-700 hover:bg-white hover:text-black hover:scale-105 cursor-pointer transition-all duration-300">PHP</span>
               </a>
            </div>
          </div>
        </div>
        <div class="relative w-80 min-h-[380px] group">
          <div class="absolute -bottom-3 -right-3 w-full h-full bg-blue-600 rounded-2xl -rotate-2 group-hover:-rotate-6 transition-all duration-300 z-0"></div>
          <div class="relative z-10 w-full h-full min-h-[380px] rounded-2xl bg-black border border-[#27272A] p-7 flex flex-col shadow-xl group-hover:-translate-y-1 transition-all duration-300">
            <div class="flex items-center gap-3 mb-5">
              <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold text-sm">3</div>
              <div class="w-11 h-11 rounded-xl bg-blue-600 flex items-center justify-center text-white">&lt;/&gt;</div>
            </div>
            <h3 class="text-white font-bold text-xl">January 2026-Self Taught</h3>
            <p class="text-zinc-400 mt-2 text-sm font-bold">Learning Full Stack</p>
            <p class="text-zinc-400 mt-5 text-sm font-bold">My Experience</p>
            <p class="text-zinc-300 text-[13px] leading-relaxed mt-4">Combined front-end and back-end to build a complete project and deploy it.</p>
            <div class="flex gap-2 mt-auto pt-6">
              <span class="text-[10px] bg-blue-600 text-white px-3 py-1.5 rounded-full font-bold hover:bg-white hover:text-black hover:scale-105 cursor-pointer transition-all duration-300">Vue.js</span>
              <span class="text-[10px] bg-blue-600 text-white px-3 py-1.5 rounded-full font-bold hover:bg-white hover:text-black hover:scale-105 cursor-pointer transition-all duration-300">Node.js</span>
              <span class="text-[10px] bg-zinc-800 text-zinc-300 px-3 py-1.5 rounded-full font-bold border border-zinc-700 hover:bg-white hover:text-black hover:scale-105 cursor-pointer transition-all duration-300">React.js</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="w-full min-h-[500px] bg-[#000000] rounded-lg flex flex-col md:flex md:flex-row gap-12 items-center justify-center"></section>
</body>
<script src="portfolio.js"></script>
</html>
