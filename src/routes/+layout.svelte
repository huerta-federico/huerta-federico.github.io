<script>
    import "../app.css";
    let y = 0;

    function goTop() {
        window.scrollTo({ top: 0, behavior: "smooth" });
    }
</script>

<div
    class="container relative flex flex-col max-w-[1400px] mx-auto w-full text-sm sm:text-base min-h-screen"
>
    <!-- Go up button -->
    <div
        class={"fixed bottom-6 right-6 duration-200 flex p-4 z-[10] " +
            (y > 0
                ? " opacity-100 pointer-events-auto"
                : " opacity-0 pointer-events-none")}
    >
        <button
            on:click={goTop}
            class="ml-auto rounded-full bg-slate-900 text-violet-400 px-4 sm:px-5 hover:bg-slate-800 cursor-pointer aspect-square grid place-items-center"
            aria-label="Go to the top"
        >
            <i class="fa-solid fa-arrow-up"></i>
        </button>
    </div>
    <!-- Actual content -->
    <slot />
</div>

<svelte:window bind:scrollY={y} />