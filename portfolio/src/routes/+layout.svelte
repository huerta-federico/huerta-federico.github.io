<script>
    import "../app.css";
    let y;
    let innerWidth = 0;
    let innerHeight = 0;

    function goTop() {
        document.body.scrollIntoView();
    }
</script>

<div
    class="container relative flex flex-col max-w-[1400px] mx-auto w-full text-sm sm:text-base min-h-screen"
>
    <!-- Go up button -->
    <div
        class={"fixed bottom-0 right-0 w-90%  duration-200 flex p-10 z-[10] " +
            (y > 0
                ? " opacity-full pointer-events-auto"
                : " opacity-0 pointer-events-none ")}
    >
        <button
            on:click={goTop}
            class="ml-auto rounded-full bg-slate-900 text-violet-400 px-4 sm:px-5 hover:bg-slate-800 cursor-pointer aspect-square grid place-items-center"
        >
            <i class="fa-solid fa-arrow-up" />
        </button>
    </div>
    <!-- Actual content -->
    <slot />
    </div>

<svelte:window bind:scrollY={y} bind:innerHeight bind:innerWidth />
