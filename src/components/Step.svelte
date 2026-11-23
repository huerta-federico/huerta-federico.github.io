<script>
    export let step;
</script>

<a
    href={step.href}
    target="_blank"
    rel="noopener noreferrer"
    class="h-full p-5 sm:p-6 md:p-8 flex flex-col gap-4 rounded-lg border border-solid border-violet-700/80 bg-slate-950/70 backdrop-blur-xs text-center cursor-pointer group hover:border-violet-400 hover:-translate-y-1 duration-200"
>
    <!-- Floating top icon -->
    <div
        class="bg-slate-950 grid place-items-center px-4 text-5xl md:text-6xl -mt-11 sm:-mt-12 md:-mt-14 lg:-mt-16 mx-auto text-slate-200 group-hover:text-violet-400 duration-200"
    >
        <i class={step.icon}></i>
    </div>

    <!-- Project title -->
    <h3 class="font-semibold text-xl sm:text-2xl md:text-3xl leading-snug">
        {step.name}
    </h3>

    <!-- Project description -->
    <div class="text-slate-300 text-sm sm:text-base leading-relaxed">
        <slot />
    </div>

    <!-- Bottom-right action pill (triggers on full-card hover) -->
    <div class="flex-1 flex justify-end items-end pt-2">
        <div
            class="px-3 py-1 rounded text-sm sm:text-base font-medium text-violet-300 group-hover:text-slate-950 duration-200 relative after:absolute after:top-0 after:right-full after:bg-violet-400 after:w-full after:h-full after:duration-200 group-hover:after:translate-x-full after:z-[-1] overflow-hidden"
        >
            <p class="relative z-10">{step.goto}&rarr;</p>
        </div>
    </div>
</a>