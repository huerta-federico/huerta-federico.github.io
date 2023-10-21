<script>
    import Step from "../Step.svelte";

    // Projects Array
    let projects = [
        {
            name: "Project 1 placeholder",
            icon: "fa-brands fa-linux",
            description: "project description 1",
        },
        {
            name: "Project 2 placeholder",
            icon: "fa-brands fa-linux",
            description: "project description 2",
        },
        {
            name: "Project 3 placeholder",
            icon: "fa-brands fa-linux",
            description: "project description 3",
        },
    ];

    // Benefits Array
    let benefits = [
        {
            name: "Benefit 1 placeholder",
            icon: "fa-brands fa-linux",
            description: "Driven towards improvement and learning.",
        },
        {
            name: "Benefit 2 placeholder",
            icon: "fa-brands fa-linux",
            description: "An excelent cookie giver.",
        },
        {
            name: "Benefit 3 placeholder",
            icon: "fa-brands fa-linux",
            description: "A great and unambiguous communicator.",
        },
    ];
</script>

<main class="flex flex-col flex-1 p-4">
    <!-- Intro section -->
    <section
        id="introPage"
        class="grid grid-cols-1 lg:grid-cols-2 gap-10 py-8 sm:py-14"
    >
        <div
            class="flex flex-col lg:justify-center text-center lg:text-left gap-6 md:gap-8 lg:gap-10"
        >
            <!-- Section title -->
            <h1 class="font-semibold text-5xl sm:text-6xl md:text-7xl">
                En construcción!
            </h1>
            <h2 class="font-semibold text-4xl sm:text-5xl md:text-6xl">
                Hi! I'm <span class="poppins text-violet-400">Federico</span>
                Huerta
                <br>
                <br />IT Engineering
                <span class="poppins text-violet-400">Student</span>
            </h2>

            <!-- Section subtitle -->
            <p class="text-base sm:text-lg md:text-xl">
                <b>Example text:</b> My
                <span class="text-violet-400"> favorite things</span> include learning
                new tech, solving problems, open source software, gaming, and reading
                books!
            </p>

            <!-- Get in Touch button-->
            <a
                class="blueShadow mx-auto lg:mr-auto lg:ml-0 text-base sm:text-lg md:text-xl poppins relative overflow-hidden px-6 py-3 group rounded-full bg-white text-slate-950"
                href="mailto:huerta.federico@gmail.com"
                target="_blank"
            >
                <div
                    class="absolute top-0 right-full w-full h-full bg-violet-400 opacity-20 group-hover:translate-x-full z-0 duration-200"
                />
                <h4 class="relative z-9">Get in touch &rarr;</h4>
            </a>
        </div>
        <div class="relative shadow-2xl grid place-items-center">
            <img
                src={"../images/profile.png"}
                alt="Profile"
                class="object-cover z-[2] max-h-[70vh]"
            />
        </div>
    </section>

    <!-- Project section -->
    <section id="projects" class="py-20 lg:py-32 flex flex-col gap-24">
        <div class="flex flex-col gap-2 text-center">
            <h6 class="text-large sm:text-xl md:textxl">
                A few of my projects
            </h6>
            <h3 class="font-semibold text-3xl sm:text-4xl md:text-5xl">
                Curious to <span class="poppins text-violet-400">see</span> my work?
            </h3>
            <p>
                Placeholder nature video used under Creative Commons Attribution
                license (reuse allowed)
            </p>
        </div>
        <a
            href="https://youtu.be/mLwlGsRhNIU?si=ww5CWeq4ucM9EZhx"
            target="_blank"
            class="mx-auto px-4 py-2 rounded-md border border-solid border-white flex items-center gap-2 -mb-4 sm:-mb-0 -mt-10 hover:border-violet-700 duration-200"
        >
            <i class="fa-regular fa-circle-play" />
            <p>Watch the video</p>
        </a>

        <!-- Project containers -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-10">
            <Step step={projects[0]}>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. <strong class="text-violet-400">
                        Ultricies mi quis hendrerit dolor magna eget est.</strong
                    > Pretium viverra suspendisse potenti nullam ac tortor vitae
                    purus faucibus.
                </p>
            </Step>
            <Step step={projects[1]}>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. <strong class="text-violet-400">
                        Ultricies mi quis hendrerit dolor magna eget est.</strong
                    > Pretium viverra suspendisse potenti nullam ac tortor vitae
                    purus faucibus.
                </p>
            </Step>
            <Step step={projects[2]}>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. <strong class="text-violet-400">
                        Ultricies mi quis hendrerit dolor magna eget est.</strong
                    > Pretium viverra suspendisse potenti nullam ac tortor vitae
                    purus faucibus.
                </p>
            </Step>
        </div>
    </section>

    <!-- About section -->
    <section
        id="about"
        class="py-20 pt-10 lg:pt-16 lg:py-32 flex flex-col gap-16 sm:gap-20 md:gap-24 relative"
    >
        <div
            class="flex flex-col gap-2 text-center relative before:absolute before:top-0 before:left-0 before:w-2/3 before:h-1.5 before:bg-violet-700 after:absolute after:bottom-0 after:right-0 after:w-2/3 after:h-1.5 after:bg-violet-700 py-4"
        >
            <h6 class="text-lg sm:text-xl md:text-2xl">Want to know more?</h6>
            <h3 class="font-semibold text-3xl sm:text-4xl md:text-5xl">
                A bit <span class="poppins text-violet-400">about</span> me.
            </h3>
        </div>
        <p class="mx-auto poppins font-semibold text-lg sm:text-xl md:text-2xl">
            I am . . .
        </p>

        <!-- Benefits containers -->
        <div class="flex flex-col gap-20 w-full mx-auto max-w-[800px]">
            {#each benefits as benefit, index}
                <div class="flex gap-6 sm:gap-8">
                    <p
                        class="poppins-mono text-4xl sm:text-5xl md:text-6xl text-slate-500 font-semibold"
                    >
                        0{index + 1}
                    </p>
                    <div class="flex flex-col gap-6 sm:gap-8">
                        <h3 class="text-2xl sm:text-3xl md:text-5xl">
                            {benefit.name}
                        </h3>
                        <p>{benefit.description}</p>
                    </div>
                </div>
            {/each}
        </div>

        <!-- Table of goodies -->
        <h5 class={" text-2xl sm:text-3xl font-semibold text-center poppins "}>
            The <span class="text-violet-400">Complete</span> Package
        </h5>
        <div
            class="flex flex-col overflow-x-scroll gap-10 max-w-[800px] mx-auto w-full"
        >
            <table class="bg-white text-slate-700 rounded text-center">
                <thead class={"border-b border-solid border-slate-200  "}>
                    <tr class="">
                        <th />
                        <th class="whitespace-nowrap p-2 px-4">Person A</th>
                        <th class="whitespace-nowrap p-2 px-4">Person B</th>
                        <th class="whitespace-nowrap p-2 px-4">Person C</th
                        >
                        <th
                            class="bg-violet-700 text-white whitespace-nowrap p-4 px-8"
                            >Me</th
                        >
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-solid border-slate-200">
                        <td
                            class="border-r border-solid border-white pl-4 pr-8 py-4 font-semibold text-sm"
                            >Dedication</td
                        >
                        <td><i class="fa-solid fa-xmark text-slate-500" /></td>
                        <td><i class="fa-solid fa-check text-slate-500" /></td>
                        <td><i class="fa-solid fa-xmark text-slate-500" /></td>
                        <td><i class="fa-solid fa-check text-green-500" /></td>
                    </tr>
                    <tr class="border-b border-solid border-slate-200">
                        <td
                            class="border-r border-solid border-white pl-4 pr-8 py-4 font-semibold text-sm"
                            >Critical Thought</td
                        >
                        <td><i class="fa-solid fa-xmark text-slate-500" /></td>
                        <td><i class="fa-solid fa-check text-slate-500" /></td>
                        <td><i class="fa-solid fa-check text-slate-500" /></td>
                        <td><i class="fa-solid fa-check text-green-500" /></td>
                    </tr>
                    <tr>
                        <td
                            class="border-r border-solid border-white pl-4 pr-8 py-4 font-semibold text-sm"
                            >Interpersonal Skills</td
                        >
                        <td><i class="fa-solid fa-check text-slate-500" /></td>
                        <td><i class="fa-solid fa-check text-slate-500" /></td>
                        <td><i class="fa-solid fa-xmark text-slate-500" /></td>
                        <td><i class="fa-solid fa-check text-green-500" /></td>
                    </tr>
                    <tr class="border-t border-solid border-slate-200">
                        <td
                            class="border-r border-solid border-white pl-4 pr-8 py-4 font-semibold text-sm"
                            >Programming Ability</td
                        >
                        <td><i class="fa-solid fa-check text-slate-500" /></td>
                        <td><i class="fa-solid fa-xmark text-slate-500" /></td>
                        <td><i class="fa-solid fa-check text-slate-500" /></td>
                        <td><i class="fa-solid fa-check text-green-500" /></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Table hint for overflow -->
        <div class="mx-auto -mt-12 italic sm:hidden opacity-50">
            <p>Scroll to see more &rarr;</p>
        </div>
        <p class="mx-auto">So why not invest in me?</p>
    </section>
</main>