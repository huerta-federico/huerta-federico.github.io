<script>
 export let y;
 
 // Mobile menu state
 let mobileMenuOpen = false;
 
 // Top bar navigation links
 let tabs = [
  { name: "Home", link: "/English" },
  { name: "Projects", link: "#projects" },
  { name: "About me", link: "#about" },
  { name: "Spanish/Español", link: "/" },
 ];
 
 // Close mobile menu when clicking on a link
 function closeMobileMenu() {
  mobileMenuOpen = false;
 }
 
 // Toggle mobile menu
 function toggleMobileMenu() {
  mobileMenuOpen = !mobileMenuOpen;
 }
</script>

<header
 class={"sticky z-[10] top-0 duration-200 px-6 flex items-center justify-between border-b border-solid " +
  (y > 0
   ? " py-4 bg-slate-950 border-violet-950"
   : " py-6 bg-transparent border-transparent")}
>
 <h1 class="font-medium">
  <b class="font-bold poppins">Federico</b> Huerta
 </h1>
 
 <!-- Desktop Navigation -->
 <div class="hidden md:flex items-center gap-4">
  {#each tabs as tab}
   <a href={tab.link} class="duration-200 hover:text-violet-400">
    <p>{tab.name}</p>
   </a>
  {/each}
  <a
   class="blueShadow mx-auto lg:mr-auto lg:ml-0 text-base sm:text-lg md:text-xl poppins relative overflow-hidden px-6 py-3 group rounded-full bg-white text-slate-950"
   href="#footer"
  >
   <div
    class="absolute top-0 right-full w-full h-full bg-violet-400 opacity-20 group-hover:translate-x-full z-0 duration-200"
   ></div>
   <h4 class="relative z-9">Get in touch &rarr;</h4>
  </a>
 </div>
 
 <!-- Mobile Menu Button -->
 <button 
  class="md:hidden flex flex-col gap-1 p-2"
  on:click={toggleMobileMenu}
  aria-label="Toggle menu"
 >
  <div class={"w-6 h-0.5 bg-current duration-200 " + (mobileMenuOpen ? "rotate-45 translate-y-2" : "")}></div>
  <div class={"w-6 h-0.5 bg-current duration-200 " + (mobileMenuOpen ? "opacity-0" : "")}></div>
  <div class={"w-6 h-0.5 bg-current duration-200 " + (mobileMenuOpen ? "-rotate-45 -translate-y-2" : "")}></div>
 </button>
</header>

<!-- Mobile Menu Overlay -->
{#if mobileMenuOpen}
 <div 
  class="fixed inset-0 z-[9] bg-slate-950/95 md:hidden"
  on:click={closeMobileMenu}
  role="presentation"
 >
  <nav class="flex flex-col items-center justify-center h-full gap-8 text-xl">
   {#each tabs as tab}
    <a 
     href={tab.link} 
     class="duration-200 hover:text-violet-400 text-center"
     on:click={closeMobileMenu}
    >
     {tab.name}
    </a>
   {/each}
   <a
    class="blueShadow text-lg poppins relative overflow-hidden px-6 py-3 group rounded-full bg-white text-slate-950 mt-4"
    href="#footer"
    on:click={closeMobileMenu}
   >
    <div
     class="absolute top-0 right-full w-full h-full bg-violet-400 opacity-20 group-hover:translate-x-full z-0 duration-200"
    ></div>
    <h4 class="relative z-9">Contáctame &rarr;</h4>
   </a>
  </nav>
 </div>
{/if}