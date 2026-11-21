<script>
    export let y;

    // Mobile menu state
    let mobileMenuOpen = false;

    // Section navigation links
    let tabs = [
        { name: "Inicio", link: "#introPage" },
        { name: "Proyectos", link: "#projects" },
        { name: "Acerca de mí", link: "#about" },
    ];

    // Language switcher routes
    let languages = [
        { code: "DE", label: "Deutsch", link: "/German", active: false },
        { code: "EN", label: "English", link: "/English", active: false },
        { code: "ES", label: "Español", link: "/", active: true },
    ];

    function closeMobileMenu() {
        mobileMenuOpen = false;
    }

    function toggleMobileMenu() {
        mobileMenuOpen = !mobileMenuOpen;
    }
</script>

<header
    class={"sticky z-20 top-0 duration-200 px-6 flex items-center justify-between border-b border-solid " +
        (y > 0
            ? " py-3.5 bg-slate-950/95 backdrop-blur-md border-violet-950"
            : " py-5 bg-transparent border-transparent")}
>
    <!-- Brand / Home Link -->
    <a href="/" class="font-medium text-lg sm:text-xl hover:text-violet-400 duration-200">
        <b class="font-bold poppins">Federico</b> Huerta
    </a>

    <!-- Desktop Navigation -->
    <div class="hidden md:flex items-center gap-6">
        <nav class="flex items-center gap-5 text-sm lg:text-base">
            {#each tabs as tab}
                <a href={tab.link} class="duration-200 hover:text-violet-400 whitespace-nowrap">
                    {tab.name}
                </a>
            {/each}
        </nav>

        <!-- Compact Language Switcher -->
        <div
            class="flex items-center gap-1 rounded-full border border-slate-700/80 bg-slate-900/70 px-2 py-1 text-xs font-semibold"
            aria-label="Selección de idioma"
        >
            {#each languages as lang}
                <a
                    href={lang.link}
                    title={lang.label}
                    class={"px-2 py-0.5 rounded-full duration-200 " +
                        (lang.active
                            ? "bg-violet-600 text-white"
                            : "text-slate-400 hover:text-white")}
                >
                    {lang.code}
                </a>
            {/each}
        </div>

        <!-- Compact Header CTA Button -->
        <a
            class="blueShadow text-sm lg:text-base poppins relative overflow-hidden px-4 py-2 group rounded-full bg-white text-slate-950 whitespace-nowrap"
            href="#footer"
        >
            <div
                class="absolute top-0 right-full w-full h-full bg-violet-400 opacity-20 group-hover:translate-x-full z-0 duration-200"
            ></div>
            <span class="relative z-10 font-medium">Contáctame &rarr;</span>
        </a>
    </div>

    <!-- Mobile Menu Button -->
    <button
        class="md:hidden flex flex-col gap-1.5 p-2 z-20"
        on:click={toggleMobileMenu}
        aria-label="Alternar menú"
        aria-expanded={mobileMenuOpen}
    >
        <div class={"w-6 h-0.5 bg-current duration-200 " + (mobileMenuOpen ? "rotate-45 translate-y-2" : "")}></div>
        <div class={"w-6 h-0.5 bg-current duration-200 " + (mobileMenuOpen ? "opacity-0" : "")}></div>
        <div class={"w-6 h-0.5 bg-current duration-200 " + (mobileMenuOpen ? "-rotate-45 -translate-y-2" : "")}></div>
    </button>
</header>

<!-- Mobile Menu Overlay -->
{#if mobileMenuOpen}
    <div
        class="fixed inset-0 z-10 bg-slate-950/95 backdrop-blur-md md:hidden"
        on:click={closeMobileMenu}
        role="presentation"
    >
        <nav class="flex flex-col items-center justify-center h-full gap-7 text-xl">
            {#each tabs as tab}
                <a
                    href={tab.link}
                    class="duration-200 hover:text-violet-400 text-center"
                    on:click={closeMobileMenu}
                >
                    {tab.name}
                </a>
            {/each}

            <!-- Mobile Language Switcher -->
            <div class="flex items-center gap-3 pt-2 border-t border-slate-800">
                {#each languages as lang}
                    <a
                        href={lang.link}
                        on:click={closeMobileMenu}
                        class={"px-3 py-1 rounded-full text-sm font-semibold duration-200 " +
                            (lang.active
                                ? "bg-violet-600 text-white"
                                : "border border-slate-700 text-slate-300 hover:text-white")}
                    >
                        {lang.label}
                    </a>
                {/each}
            </div>

            <a
                class="blueShadow text-base poppins relative overflow-hidden px-6 py-3 group rounded-full bg-white text-slate-950 mt-2"
                href="#footer"
                on:click={closeMobileMenu}
            >
                <div
                    class="absolute top-0 right-full w-full h-full bg-violet-400 opacity-20 group-hover:translate-x-full z-0 duration-200"
                ></div>
                <span class="relative z-10 font-medium">Contáctame &rarr;</span>
            </a>
        </nav>
    </div>
{/if}