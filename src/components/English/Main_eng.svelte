<script>
    import Step from "../Step.svelte";

    // Projects Array
    let goto_text = "Go to ";
    let projects = [
        {
            name: "Personal Online Portfolio",
            icon: "fa-solid fa-briefcase",
            href: "https://github.com/huerta-federico/huerta-federico.github.io",
            goto: goto_text,
        },
        {
            name: "Nextcloud Scalable Deployment with Kubernetes and AWS EKS",
            icon: "fa-solid fa-cloud",
            href: "https://github.com/huerta-federico/utpl-tic-public",
            goto: goto_text,
        },
        {
            name: "Smart SQLite Database for Water Filtration Operations",
            icon: "fa-solid fa-database",
            href: "https://youtu.be/h16s3onXESU",
            goto: goto_text,
        },
    ];

    // Benefits Array
    let benefits = [
        {
            name: "driven to learn and improve",
            icon: "fa-solid fa-code",
            description:
                "I'm constantly driven to expand my knowledge, exploring new frameworks, tools, and systems to refine my expertise. Continuously improving on what I already know is a core part of my growth mindset.",
        },
        {
            name: "a resourceful problem solver",
            icon: "fa-regular fa-lightbulb",
            description:
                "I excel at analyzing complex technical challenges, developing innovative solutions, and optimizing system performance with precision and efficiency.",
        },
        {
            name: "great at communication",
            icon: "fa-solid fa-comments",
            description:
                "Effective communication drives better results for teams and organizations, which is why I prioritize precision, transparency, and respect in every interaction.",
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
            <h2 class="font-semibold text-4xl sm:text-5xl md:text-6xl">
                Hi! I'm <span class="poppins text-violet-400"
                    >Federico Huerta</span
                >,
                <br />
                an <span class="poppins text-violet-400">IT Engineer</span>
                <br />
            </h2>

            <!-- Section subtitle -->
            <p class="text-base sm:text-lg md:text-xl">
                I <span class="text-violet-400">thrive</span> on exploring new technology,
                tackling complex problems, and engaging with open-source projects.
                When I'm not diving into tech, you'll find me immersed in gaming
                or lost in a good book.
            </p>

            <!-- Get in Touch button-->
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
        <!--
        <div class="relative shadow-2xl grid place-items-center">
            <img
                src={"../images/profile.png"}
                alt="Profile"
                class="object-cover z-[2] max-h-[70vh]"
            />
        </div>
    -->
    </section>

    <!-- Project section -->
    <section id="projects" class="py-20 lg:py-32 flex flex-col gap-24">
        <div class="flex flex-col gap-2 text-center">
            <h6 class="text-large sm:text-xl md:textxl">
                A few of my projects
            </h6>
        </div>

        <!-- Project containers -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-10">
            <Step step={projects[0]}>
                <p>
                    A personal online portfolio built using <strong
                        class="text-violet-400"
                        >SvelteKit and Tailwind CSS</strong
                    >, designed for responsiveness across multiple screen sizes.
                    Features a simple yet elegant JavaScript-animated
                    background. Hosted on
                    <strong class="text-violet-400">GitHub Pages</strong>
                    and deployed via an automated build and post-process powered
                    by <strong class="text-violet-400">Node.js</strong>
                </p>
            </Step>
            <Step step={projects[1]}>
                <p>
                    A production-ready, fully containerized deployment of <strong
                        class="text-violet-400">Nextcloud</strong
                    >
                    on <strong class="text-violet-400">AWS EKS</strong>,
                    featuring horizontal scalability, high availability, and
                    cloud-native integrations. Includes Collabora Online, Talk
                    (HPB), Redis Cluster, MariaDB Galera, and push notifications
                    — all orchestrated with
                    <strong class="text-violet-400">Kubernetes</strong> and hardened
                    with secure Ingress, autoscaling, and persistent distributed
                    storage.
                </p>
            </Step>
            <Step step={projects[2]}>
                <p>
                    Designed and implemented a relational database in <strong
                        class="text-violet-400">SQLite</strong
                    >
                    to support core operations of a water filtration business, including
                    customer management, inventory, order processing, and maintenance
                    scheduling. The project features
                    <strong class="text-violet-400"
                        >normalized schemas, data integrity via constraints,
                        automated triggers, and performance-optimized views</strong
                    > demonstrating strong database design and practical problem-solving
                    skills.
                </p>
            </Step>
        </div>
    </section>

    <!-- About section -->
    <section
        id="about"
        class="py-20 pt-10 lg:pt-16 lg:py-32 flex flex-col gap-16 sm:gap-20 md:gap-24 relative"
    >
        <br />
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
                    <div
                        class="pt-2 place-items-center text-5xl md:text-6xl mx-auto"
                    >
                        <i class={benefit.icon}></i>
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
                        <th class="whitespace-nowrap p-2 px-4">Person C</th>
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
        <h6 class={" text-1xl sm:text-2xl text-center poppins "}>
            So why not invest in me?
        </h6>
    </section>
</main>
