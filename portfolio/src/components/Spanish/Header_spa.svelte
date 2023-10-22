<script>
    export let y;

    // Top bar navigation links
    let tabs = [
        { name: "Inicio", link: "/" },
        { name: "Proyectos", link: "#projects" },
        { name: "Acerca de mí", link: "#about" },
        { name: "English/Inglés", link: "/English" },
    ];
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
    <div class="sm:flex items-center gap-4 hidden">
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
            />
            <h4 class="relative z-9">Get in touch &rarr;</h4>
        </a>
    </div>
</header>
