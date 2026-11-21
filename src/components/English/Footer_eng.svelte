<script>
    let copied = false;
    const email = "huerta_federico@outlook.com";

    function copyEmail() {
        navigator.clipboard.writeText(email);
        copied = true;
        setTimeout(() => {
            copied = false;
        }, 2000);
    }
</script>

<footer
    id="footer"
    class="py-16 sm:py-24 px-4 bg-black/80 backdrop-blur-sm border-t border-solid border-violet-950 flex flex-col gap-8 justify-center items-center text-center"
>
    <p class="px-5 py-2 rounded-full bg-white text-slate-950 font-semibold poppins text-sm sm:text-base">
        Connect with me &darr;
    </p>

    <div class="flex flex-col gap-4 items-center justify-center text-base sm:text-lg">
        <!-- Email + One-Click Copy -->
        <div class="flex flex-wrap items-center justify-center gap-2">
            <b class="pr-1">Email:</b>
            <a
                href={`mailto:${email}`}
                class="text-violet-400 hover:text-violet-300 hover:underline duration-200"
            >
                {email}
            </a>
            <button
                type="button"
                on:click={copyEmail}
                class="ml-1 px-2.5 py-0.5 text-xs font-medium rounded-full border border-slate-700 bg-slate-900 text-slate-300 hover:border-violet-500 hover:text-white duration-200"
                title="Copy email address"
            >
                {copied ? "Copied!" : "Copy"}
            </button>
        </div>

        <!-- GitHub -->
        <p>
            <b class="pr-2">GitHub:</b>
            <a
                href="https://github.com/huerta-federico"
                target="_blank"
                rel="noopener noreferrer"
                class="text-violet-400 hover:text-violet-300 hover:underline duration-200"
            >
                huerta-federico<sup
                    ><span class="text-xs scale-75 pl-0.5"
                        ><i
                            class="fa-solid fa-arrow-up-right-from-square text-xs scale-[75%]"
                        ></i></span
                    ></sup
                >
            </a>
        </p>

        <!-- LinkedIn (Update href with your profile URL if desired) -->
        <p>
            <b class="pr-2">LinkedIn:</b>
            <a
                href="https://www.linkedin.com/in/federico-h-a220693b8/"
                target="_blank"
                rel="noopener noreferrer"
                class="text-violet-400 hover:text-violet-300 hover:underline duration-200"
            >
                Federico Huerta<sup
                    ><span class="text-xs scale-75 pl-0.5"
                        ><i
                            class="fa-solid fa-arrow-up-right-from-square text-xs scale-[75%]"
                        ></i></span
                    ></sup
                >
            </a>
        </p>
    </div>

    <!-- Location & Copyright -->
    <div class="pt-6 border-t border-slate-800/80 w-full max-w-md flex flex-col gap-1 text-xs sm:text-sm text-slate-400">
        <p>Nuremberg, Germany &bull; FAU Erlangen-Nürnberg</p>
        <p>&copy; {new Date().getFullYear()} Federico Huerta. Built with SvelteKit &amp; Tailwind CSS.</p>
    </div>
</footer>