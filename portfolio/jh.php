
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
    html {
      scroll-behavior: smooth;
    }

    .line {
      transition: all 0.3s ease;
    }

    .open.line1 {
      transform: rotate(45deg) translate(5px, 6px);
    }

    .open.line2 {
      opacity: 0;
    }

    .open.line3 {
      transform: rotate(-45deg) translate(5px, -6px);
    }

    #menu {
      transition: transform 0.3s ease;
    }

    .menu-closed {
      transform: translateX(100%);
    }

    .menu-open {
      transform: translateX(0);
    }

    .project-card {
      transition: all 0.3s ease;
    }

    .project-card:hover {
      transform: translateY(-6px);
      border-color: #3b82f6;
    }

    .reveal,
    .reveals,
    .revel {
      transition: opacity 0.7s ease, transform 0.7s ease;
    }
  </style>
</head>

<body class="bg-[#0a0a0a] text-white">

  <!-- NAVIGATION -->
  <nav class="w-full bg-[#101827]/90 border-b border-white/10 backdrop-blur-md shadow-sm px-6 md:px-20 py-5 flex justify-between items-center sticky top-0 z-50">

    <h1 class="text-2xl uppercase font-black text-white">
      JH Portfolio
    </h1>

    <ul class="hidden md:flex items-center gap-8 text-white">
      <li><a href="#Home" class="font-bold text-sm uppercase hover:text-blue-500 transition">Home</a></li>
      <li><a href="#About" class="font-bold text-sm uppercase hover:text-blue-500 transition">About</a></li>
      <li><a href="#Projects" class="font-bold text-sm uppercase hover:text-blue-500 transition">Projects</a></li>
      <li><a href="#Experience" class="font-bold text-sm uppercase hover:text-blue-500 transition">Experience</a></li>
      <li><a href="#contact" class="font-bold text-sm uppercase hover:text-blue-500 transition">Contact</a></li>
    </ul>

    <button id="hamBtn" aria-label="Toggle navigation" aria-expanded="false"
      class="w-10 h-10 flex flex-col justify-center items-center gap-[5px] bg-gray-100 rounded-full hover:bg-gray-200 transition z-50 md:hidden">

      <div class="line line1 w-5 h-[2.5px] bg-black rounded"></div>
      <div class="line line2 w-5 h-[2.5px] bg-black rounded"></div>
      <div class="line line3 w-5 h-[2.5px] bg-black rounded"></div>
    </button>

  </nav>

  <!-- MOBILE MENU OVERLAY -->
  <div id="blur" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-30"></div>

  <!-- MOBILE MENU -->
  <div id="menu" class="hidden fixed top-[72px] right-0 w-[80%] max-w-[320px] h-[calc(100vh-72px)] bg-gradient-to-b from-zinc-900 to-black p-8 flex flex-col gap-6 z-40 shadow-2xl menu-closed">

    <h1 class="text-xl font-black uppercase tracking-widest text-white/50">
      Menu
    </h1>

    <ul class="flex flex-col gap-2">

      <li><a href="#Home" class="block py-4 px-4 text-white font-bold uppercase text-lg hover:bg-white hover:text-black rounded-xl transition">Home</a></li>

      <li><a href="#About" class="block py-4 px-4 text-white font-bold uppercase text-lg hover:bg-white hover:text-black rounded-xl transition">About</a></li>

      <li><a href="#Projects" class="block py-4 px-4 text-white font-bold uppercase text-lg hover:bg-white hover:text-black rounded-xl transition">Projects</a></li>

      <li><a href="#Experience" class="block py-4 px-4 text-white font-bold uppercase text-lg hover:bg-white hover:text-black rounded-xl transition">Experience</a></li>

      <li><a href="#contact" class="block py-4 px-4 text-white font-bold uppercase text-lg hover:bg-white hover:text-black rounded-xl transition">Contact</a></li>

      <div class="h-[1px] bg-white/10 my-4"></div>

      <li class="py-2 px-4 text-white/60 font-bold text-sm uppercase">
        Other Information
      </li>

      <li><a href="#About" class="block py-3 px-4 text-white hover:bg-blue-700 rounded-xl transition">Personal Info</a></li>

      <li><a href="#contact" class="block py-3 px-4 text-white hover:bg-blue-700 rounded-xl transition">Contact Information</a></li>

    </ul>
  </div>


  <!-- HOME -->
  <section id="Home" class="w-full min-h-[100vh] flex flex-col md:flex-row justify-between items-center px-6 md:px-20 bg-[#101827] rounded-xl">

    <div class="w-full md:w-1/2">

      <p class="text-blue-500 uppercase tracking-[0.3em] text-sm font-bold mb-5">
        Aspiring Full-Stack Developer
      </p>

      <h1 class="text-4xl md:text-6xl font-black leading-tight text-white">
        I Build
        <span class="text-blue-600">Practical</span>
        Digital Systems.
      </h1>

      <p class="text-gray-400 font-medium text-base mt-6 leading-relaxed max-w-xl">
        Hi, I'm Jhan Jhan. I build practical web applications
        focused on solving real-world problems for small businesses
        and communities.
      </p>

      <div class="mt-8 flex flex-wrap gap-4">

        <a href="#Projects"
          class="bg-blue-700 text-white px-8 py-3 rounded-full font-bold hover:bg-blue-600 hover:scale-105 transition-all duration-300">
          Explore Projects
        </a>

        <a href="#contact"
          class="border border-white/30 text-white px-8 py-3 rounded-full font-bold hover:bg-white hover:text-black transition-all duration-300">
          Contact Me
        </a>

      </div>

    </div>

    <div class="w-full md:w-1/2 flex justify-center mt-8 md:mt-0">

      <img id="myPic" src="../asset/jh.png"
        alt="Jhan Jhan portfolio profile"
        class="h-[60vh] md:h-[90vh] object-contain">

    </div>

  </section>


  <!-- ABOUT -->
  <section id="About"
    class="reveal opacity-0 translate-y-12 w-full min-h-screen px-6 md:px-20 py-20 bg-zinc-50 text-black rounded-lg flex flex-col md:flex-row justify-between items-center gap-12">

    <div class="w-full md:w-[45%] flex justify-center">

      <img src="../asset/rest.png"
        alt="About me"
        class="w-full max-w-[400px] rounded-[30px] object-cover shadow-2xl hover:scale-105 transition">

    </div>

    <div class="w-full md:w-[55%] flex flex-col gap-6">

      <h1 class="text-3xl text-center font-black tracking-[0.3em] text-blue-700 uppercase">
        About Me
      </h1>

      <h2 class="text-4xl md:text-5xl font-black uppercase leading-tight">
        Building With
        <span class="text-blue-700">Purpose.</span>
      </h2>

      <p class="text-gray-600 font-medium leading-relaxed">

        I'm Jhan Jhan, an aspiring web developer from Bohol,
        passionate about building reliable and useful websites
        and developing practical systems.

        <span id="moreText" class="hidden">
          My interest in web development goes beyond writing code.
          I enjoy exploring how digital solutions can improve
          everyday processes, organize information, and help
          people manage their work more efficiently.
          I continue learning through experimentation and
          personal projects.
        </span>

      </p>

      <div class="mt-5 flex gap-5 items-center">

        <button id="SeeMore"
          class="bg-blue-800 text-white uppercase px-8 py-3 rounded-lg font-bold text-lg hover:bg-blue-700 hover:scale-105 transition-all duration-300">
          See More
        </button>

      </div>

    </div>

  </section>


  <!-- PROJECTS -->
  <section id="Projects"
    class="w-full min-h-screen bg-[#0a0a0a] px-6 md:px-20 py-24">

    <!-- PROJECT HEADER -->
    <div class="reveals opacity-0 translate-y-12 mb-16">

      <p class="text-blue-500 uppercase tracking-[0.3em] text-sm font-bold mb-4">
        Selected Works
      </p>

      <h1 class="text-4xl md:text-5xl font-black uppercase tracking-tight">
        Featured
        <span class="text-blue-600">Projects.</span>
      </h1>

      <p class="text-zinc-400 mt-5 max-w-2xl leading-relaxed">
        A collection of systems and experiments focused on
        addressing practical problems through web development.
      </p>

      <div class="mt-6 h-1 w-20 bg-blue-600 rounded-full"></div>

    </div>


    <!-- PROJECT CARDS -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">


      <!-- PROJECT 1 -->
      <div class="reveals opacity-0 translate-y-12 project-card bg-[#101827] border border-white/10 rounded-2xl p-8 flex flex-col">

        <div class="flex justify-between items-center mb-8">

          <span class="text-blue-500 text-sm font-bold tracking-widest">
            PROJECT 01
          </span>

          <span class="text-zinc-500 text-xs uppercase tracking-widest">
            Management
          </span>

        </div>

        <h2 class="text-2xl font-black text-white mb-4">
          Barangay Management System
        </h2>

        <p class="text-zinc-400 text-sm leading-relaxed mb-7">
          A web-based system concept focused on organizing
          barangay information and supporting administrative
          record management.
        </p>

        <div class="border-t border-white/10 pt-6 space-y-5">

          <div>
            <h3 class="text-blue-500 text-xs uppercase tracking-widest font-bold mb-2">
              The Problem
            </h3>

            <p class="text-zinc-300 text-sm leading-relaxed">
              Managing resident information and administrative
              records can become difficult when information
              is handled manually.
            </p>
          </div>

          <div>
            <h3 class="text-blue-500 text-xs uppercase tracking-widest font-bold mb-2">
              The Solution
            </h3>

            <p class="text-zinc-300 text-sm leading-relaxed">
              Developing a centralized system to organize
              resident records and make information management
              more structured.
            </p>
          </div>

          <div>
            <h3 class="text-blue-500 text-xs uppercase tracking-widest font-bold mb-2">
              What I Learned
            </h3>

            <p class="text-zinc-300 text-sm leading-relaxed">
              Database relationships, structured information,
              CRUD operations, and designing around
              administrative workflows.
            </p>
          </div>

        </div>

      </div>


      <!-- PROJECT 2 -->
      <div class="reveals opacity-0 translate-y-12 project-card bg-[#101827] border border-white/10 rounded-2xl p-8 flex flex-col">

        <div class="flex justify-between items-center mb-8">

          <span class="text-blue-500 text-sm font-bold tracking-widest">
            PROJECT 02
          </span>

          <span class="text-zinc-500 text-xs uppercase tracking-widest">
            Business
          </span>

        </div>

        <h2 class="text-2xl font-black text-white mb-4">
          Sari-Sari Store Management System
        </h2>

        <p class="text-zinc-400 text-sm leading-relaxed mb-7">
          A small-business management system focused on
          organizing products, monitoring inventory,
          and managing store transactions.
        </p>

        <div class="border-t border-white/10 pt-6 space-y-5">

          <div>
            <h3 class="text-blue-500 text-xs uppercase tracking-widest font-bold mb-2">
              The Problem
            </h3>

            <p class="text-zinc-300 text-sm leading-relaxed">
              Small stores can experience difficulties
              tracking products, stock levels, and daily
              transactions using manual records.
            </p>
          </div>

          <div>
            <h3 class="text-blue-500 text-xs uppercase tracking-widest font-bold mb-2">
              The Solution
            </h3>

            <p class="text-zinc-300 text-sm leading-relaxed">
              Developing a digital system to organize
              product information, inventory records,
              and store operations.
            </p>
          </div>

          <div>
            <h3 class="text-blue-500 text-xs uppercase tracking-widest font-bold mb-2">
              What I Learned
            </h3>

            <p class="text-zinc-300 text-sm leading-relaxed">
              Inventory logic, transaction workflows,
              data consistency, and building applications
              around business needs.
            </p>
          </div>

        </div>

      </div>


      <!-- PROJECT 3 -->
      <div class="reveals opacity-0 translate-y-12 project-card bg-[#101827] border border-white/10 rounded-2xl p-8 flex flex-col">

        <div class="flex justify-between items-center mb-8">

          <span class="text-blue-500 text-sm font-bold tracking-widest">
            PROJECT 03
          </span>

          <span class="text-zinc-500 text-xs uppercase tracking-widest">
            Financial Records
          </span>

        </div>

        <h2 class="text-2xl font-black text-white mb-4">
          Pautang Management System
        </h2>

        <p class="text-zinc-400 text-sm leading-relaxed mb-7">
          A credit and payment tracking system designed
          to organize customer debts, payment records,
          and outstanding balances.
        </p>

        <div class="border-t border-white/10 pt-6 space-y-5">

          <div>
            <h3 class="text-blue-500 text-xs uppercase tracking-widest font-bold mb-2">
              The Problem
            </h3>

            <p class="text-zinc-300 text-sm leading-relaxed">
              Manually tracking customer debts and payments
              can lead to confusing records and inaccurate
              outstanding balances.
            </p>
          </div>

          <div>
            <h3 class="text-blue-500 text-xs uppercase tracking-widest font-bold mb-2">
              The Solution
            </h3>

            <p class="text-zinc-300 text-sm leading-relaxed">
              Developing an organized way to manage customer
              credit records, payment history, and remaining
              balances.
            </p>
          </div>

          <div>
            <h3 class="text-blue-500 text-xs uppercase tracking-widest font-bold mb-2">
              What I Learned
            </h3>

            <p class="text-zinc-300 text-sm leading-relaxed">
              Accurate calculations, financial record
              organization, payment tracking, and
              maintaining data integrity.
            </p>
          </div>

        </div>

      </div>


    </div>

  </section>


  <!-- SKILLS / TECHNICAL STACK -->
  <section id="Skills"
    class="w-full bg-[#101827] px-6 md:px-20 py-20">

    <div class="max-w-6xl mx-auto">

      <div class="reveals opacity-0 translate-y-12">

        <p class="text-blue-500 uppercase tracking-[0.3em] text-xs font-bold mb-4">
          Technical Foundation
        </p>

        <h1 class="text-3xl md:text-4xl font-black uppercase">
          Technologies I
          <span class="text-blue-600">Work With.</span>
        </h1>

        <p class="text-zinc-400 mt-4 max-w-2xl leading-relaxed">
          Technologies and tools I use while exploring,
          developing, and improving web applications.
        </p>

      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">

        <!-- FRONTEND -->
        <div class="reveals opacity-0 translate-y-12 border-t border-white/20 pt-6">

          <h2 class="text-white font-bold text-lg mb-5">
            Frontend Development
          </h2>

          <p class="text-zinc-400 text-sm leading-8">
            HTML <span class="text-zinc-700">/</span>
            CSS <span class="text-zinc-700">/</span>
            JavaScript <span class="text-zinc-700">/</span>
            Tailwind CSS
          </p>

        </div>

        <!-- BACKEND -->
        <div class="reveals opacity-0 translate-y-12 border-t border-white/20 pt-6">

          <h2 class="text-white font-bold text-lg mb-5">
            Backend Development
          </h2>

          <p class="text-zinc-400 text-sm leading-8">
            PHP <span class="text-zinc-700">/</span>
            Node.js <span class="text-zinc-700">/</span>
            Database Integration
          </p>

        </div>

        <!-- DATABASE -->
        <div class="reveals opacity-0 translate-y-12 border-t border-white/20 pt-6">

          <h2 class="text-white font-bold text-lg mb-5">
            Database & Frameworks
          </h2>

          <p class="text-zinc-400 text-sm leading-8">
            MySQL <span class="text-zinc-700">/</span>
            MariaDB <span class="text-zinc-700">/</span>
            Vue.js <span class="text-zinc-700">/</span>
            React.js
          </p>

        </div>

      </div>

    </div>

  </section>


  <!-- EXPERIENCE -->
  <section id="Experience"
    class="w-full min-h-screen bg-[#0a0a0a] px-6 md:px-20 py-24">

    <!-- HEADER -->
    <div class="reveals opacity-0 translate-y-12 mb-16">

      <p class="text-blue-500 uppercase tracking-[0.3em] text-sm font-bold mb-4">
        Development Journey
      </p>

      <h1 class="text-3xl md:text-5xl uppercase font-black tracking-tight">
        Experience Through
        <span class="text-blue-600">Learning.</span>
      </h1>

      <p class="text-zinc-400 mt-5 max-w-2xl leading-relaxed">
        My journey in web development through self-learning,
        experimentation, and building practical applications.
      </p>

      <div class="mt-6 h-1 w-20 bg-blue-600 rounded-full"></div>

    </div>


    <!-- TIMELINE -->
    <div class="max-w-4xl mx-auto relative border-l border-white/20 ml-3 md:ml-8 space-y-14">

      <!-- EXPERIENCE 1 -->
      <div class="reveals opacity-0 translate-y-12 relative pl-8 md:pl-12">

        <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-blue-600 border-4 border-[#0a0a0a]"></div>

        <span class="text-blue-500 text-xs uppercase tracking-widest font-bold">
          January 2022
        </span>

        <h2 class="text-white text-xl md:text-2xl font-bold mt-3">
          Frontend Development
        </h2>

        <p class="text-zinc-500 text-sm mt-2">
          Self-Learning
        </p>

        <p class="text-zinc-400 text-sm leading-relaxed mt-5 max-w-2xl">
          Started learning the fundamentals of frontend development,
          exploring HTML, CSS, and responsive layouts.
          Focused on understanding how websites are structured
          and how user interfaces are created.
        </p>

      </div>


      <!-- EXPERIENCE 2 -->
      <div class="reveals opacity-0 translate-y-12 relative pl-8 md:pl-12">

        <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-blue-600 border-4 border-[#0a0a0a]"></div>

        <span class="text-blue-500 text-xs uppercase tracking-widest font-bold">
          May 2025
        </span>

        <h2 class="text-white text-xl md:text-2xl font-bold mt-3">
          Backend Development
        </h2>

        <p class="text-zinc-500 text-sm mt-2">
          Self-Learning
        </p>

        <p class="text-zinc-400 text-sm leading-relaxed mt-5 max-w-2xl">
          Expanded my knowledge into backend development,
          learning how server-side applications work,
          how databases store information, and how
          frontend applications communicate with backend logic.
        </p>

      </div>


      <!-- EXPERIENCE 3 -->
      <div class="reveals opacity-0 translate-y-12 relative pl-8 md:pl-12">

        <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-blue-600 border-4 border-[#0a0a0a]"></div>

        <span class="text-blue-500 text-xs uppercase tracking-widest font-bold">
          January 2026
        </span>

        <h2 class="text-white text-xl md:text-2xl font-bold mt-3">
          Full-Stack Development
        </h2>

        <p class="text-zinc-500 text-sm mt-2">
          Personal Projects & Experimentation
        </p>

        <p class="text-zinc-400 text-sm leading-relaxed mt-5 max-w-2xl">
          Began combining frontend and backend development
          to create complete web applications. Explored
          practical system development, database integration,
          and ways to solve everyday problems through software.
        </p>

      </div>

    </div>

  </section>


  <!-- CONTACT -->
  <section id="contact"
    class="w-full min-h-[500px] bg-[#101827] px-6 md:px-20 py-24 flex flex-col items-center justify-center text-center">

    <div class="reveals opacity-0 translate-y-12 max-w-3xl">

      <p class="text-blue-500 uppercase tracking-[0.3em] text-sm font-bold mb-5">
        Get In Touch
      </p>

      <h1 class="text-4xl md:text-6xl font-black uppercase leading-tight">
        Let's Build Something
        <span class="text-blue-600">Useful.</span>
      </h1>

      <p class="text-zinc-400 mt-6 leading-relaxed">
        Interested in web development, practical systems,
        or collaborating on projects? Feel free to connect.
      </p>

      <a href="mailto:"
        class="inline-block mt-8 bg-blue-700 text-white px-8 py-3 rounded-full font-bold hover:bg-blue-600 hover:scale-105 transition-all duration-300">
        Contact Me
      </a>

    </div>

  </section>


  <!-- FOOTER -->
  <footer class="bg-black border-t border-white/10 px-6 md:px-20 py-10">

    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">

      <div>
        <h2 class="text-white text-xl font-black uppercase">
          JH Portfolio
        </h2>

        <p class="text-zinc-500 text-xs mt-2">
          Designed and developed by Janjan.
        </p>
      </div>

      <p class="text-zinc-500 text-xs text-center">
        Built with PHP, PDO, Tailwind CSS, JavaScript, and modern web technologies.
      </p>

      <a href="#Home"
        class="text-zinc-400 text-sm hover:text-blue-500 transition">
        Back to Top ↑
      </a>

    </div>

    <div class="max-w-6xl mx-auto border-t border-white/10 mt-8 pt-6">

      <p class="text-center text-zinc-600 text-xs">
        © 2026 JH Portfolio. All Rights Reserved.
      </p>

    </div>
  </body>
  <script src="portfolio.js"></script>

  </html?
  </footer>


  <!-- JAVASCRIPT -->
  
 