<script>
    import Step from "../Step.svelte";

    // Projects Array
    let goto_text = "Zum Projekt ";
    let projects = [
        {
            name: "Persönliches Online-Portfolio",
            icon: "fa-solid fa-briefcase",
            href: "https://github.com/huerta-federico/huerta-federico.github.io",
            goto: goto_text,
        },
        {
            name: "High-Availability Nextcloud auf AWS EKS (Bachelorarbeit)",
            icon: "fa-solid fa-cloud",
            href: "https://github.com/huerta-federico/utpl-tic-public",
            goto: goto_text,
        },
        {
            name: "Relationale SQLite-Datenbank für Wasserfilter-Management",
            icon: "fa-solid fa-database",
            href: "https://youtu.be/h16s3onXESU",
            goto: goto_text,
        },
        {
            name: "Full-Stack-Webanwendung mit Flask & SQLite",
            icon: "fa-brands fa-python",
            href: "https://youtu.be/_duh_q1e7HE",
            goto: goto_text,
        },
        {
            name: "Android-Fitness-Tracker mit Flutter & SQLite",
            icon: "fa-brands fa-android",
            href: "https://github.com/huerta-federico/insanity_tracker",
            goto: goto_text,
        },
    ];

    // Benefits Array (Backed by real CV achievements)
    let benefits = [
        {
            name: "Operative Exzellenz & Automatisierung",
            icon: "fa-solid fa-terminal",
            description:
                "Im 24/7-FinTech-Betrieb zählt jede Minute. Durch gezielte Bash-Automatisierung habe ich Incident-Response-Zeiten von Stunden auf Minuten verkürzt und Produktiv-Releases für Java/Spring-Boot-Systeme zuverlässig abgesichert.",
        },
        {
            name: "Performance- & Datenbank-Optimierung",
            icon: "fa-solid fa-gauge-high",
            description:
                "Ich analysiere Engpässe bis auf die Datenbankebene: Durch Query-Tuning und Behebung von Datenintegritätsfehlern unter SQL Server und Oracle PL/SQL konnte ich die I/O-Last um 99,9 % reduzieren.",
        },
        {
            name: "Schnittstelle zwischen Technik & Stakeholdern",
            icon: "fa-solid fa-comments",
            description:
                "Mit Erfahrung im direkten FinTech-Kundensupport, mehrsprachiger Kommunikation (Deutsch, Englisch C2, Spanisch) und meinem Masterstudium an der FAU übersetze ich komplexe Störungen und Anforderungen klar für Teams und Kunden.",
        },
    ];

    // Tech Stack & Certifications Matrix (Updated from CV)
    let skills = [
        {
            category: "Cloud, DevOps & Observability",
            tools: "AWS (EKS, EC2, S3, RDS, Aurora), Azure, Kubernetes, Docker, Helm, GitHub Actions, OpenSearch, FluentD, Azure Monitor",
        },
        {
            category: "Datenbanken & Data Engineering",
            tools: "Microsoft SQL Server, Oracle PL/SQL, MariaDB Galera, MySQL, SQLite, Redis, ETL auf AWS, Pandas, Power BI",
        },
        {
            category: "Entwicklung & Betriebssysteme",
            tools: "Java (Spring Boot), Python (Flask), Bash, JavaScript/TypeScript, SvelteKit, Flutter, Linux (RedHat), Windows Server",
        },
        {
            category: "Zertifizierungen & KI / ML",
            tools: "AWS Certified Cloud Practitioner, AWS Certified AI Practitioner, AWS SageMaker AI, LangChain, PyTorch, Scikit-learn",
        },
    ];
</script>

<main class="flex flex-col flex-1 p-4">
    <!-- Intro section -->
    <section
        id="introPage"
        class="grid grid-cols-1 lg:grid-cols-1 max-w-4xl mx-auto gap-10 py-8 sm:py-14"
    >
        <div
            class="flex flex-col lg:justify-center text-center lg:text-left gap-6 md:gap-8 lg:gap-10"
        >
            <!-- Section title -->
            <h1 class="font-semibold text-4xl sm:text-5xl md:text-6xl">
                Hallo! Ich bin <span class="poppins text-violet-400"
                    >Federico Huerta</span
                >,
                <br />
                <span class="poppins text-violet-400">Cloud- & QA-Engineer</span>
            </h1>

            <!-- Section subtitle -->
            <p class="text-base sm:text-lg md:text-xl leading-relaxed">
                <span class="text-violet-400 font-medium">AWS-zertifizierter IT-Ingenieur</span> mit FinTech-Praxiserfahrung in 24/7-Produktiv-Deployments, Incident Response und Datenbank-Optimierung – aktuell im Masterstudium <span class="text-violet-400 font-medium">International Information Systems (M. Sc.)</span> an der <span class="text-violet-400 font-medium">FAU Erlangen-Nürnberg</span>.
            </p>

            <!-- Quick Highlights Badges -->
            <div class="flex flex-wrap justify-center lg:justify-start gap-2 text-xs sm:text-sm font-medium">
                <span class="px-3 py-1 rounded-full bg-violet-950/80 border border-violet-500/40 text-violet-300">
                    M. Sc. @ FAU Erlangen-Nürnberg
                </span>
                <span class="px-3 py-1 rounded-full bg-violet-950/80 border border-violet-500/40 text-violet-300">
                    2x AWS Certified
                </span>
                <span class="px-3 py-1 rounded-full bg-violet-950/80 border border-violet-500/40 text-violet-300">
                    FinTech Prod & QA
                </span>
            </div>

            <!-- Get in Touch button-->
            <a
                class="blueShadow mx-auto lg:mr-auto lg:ml-0 text-base sm:text-lg md:text-xl poppins relative overflow-hidden px-6 py-3 group rounded-full bg-white text-slate-950"
                href="#footer"
            >
                <div
                    class="absolute top-0 right-full w-full h-full bg-violet-400 opacity-20 group-hover:translate-x-full z-0 duration-200"
                ></div>
                <h4 class="relative z-9">Kontakt aufnehmen &rarr;</h4>
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
            <p class="text-lg sm:text-xl text-violet-400 uppercase tracking-wider font-medium">
                Portfolio
            </p>
            <h2 class="font-semibold text-3xl sm:text-4xl md:text-5xl">
                Ausgewählte <span class="poppins text-violet-400">Projekte</span>
            </h2>
        </div>

        <div
            class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-12 max-w-6xl mx-auto w-full"
        >
            <Step step={projects[0]}>
                <p>
                    Responsives Web-Portfolio auf Basis von <strong
                        class="text-violet-400"
                        >SvelteKit und Tailwind CSS</strong
                    > mit flüssigen JavaScript-Hintergrundanimationen. Gehostet über
                    <strong class="text-violet-400">GitHub Pages</strong>
                    und ausgeliefert durch einen automatisierten Build- und Post-Processing-Workflow mit
                    <strong class="text-violet-400">Node.js</strong>.
                </p>
            </Step>
            <Step step={projects[1]}>
                <p>
                    Produktionsreifer, horizontal skalierbarer Cluster für <strong
                        class="text-violet-400">Nextcloud auf AWS EKS</strong
                    > (ausgezeichnete Bachelorarbeit). Orchestriert mit <strong class="text-violet-400">Kubernetes und Helm</strong> inklusive Collabora Online, Talk, <strong class="text-violet-400">MariaDB Galera und Redis Cluster</strong> – mit <strong class="text-violet-400">A+ Security-Ratings</strong> und <strong class="text-violet-400">136 % schnelleren Übertragungsraten</strong> als OneDrive.
                </p>
            </Step>
            <Step step={projects[2]}>
                <p>
                    Konzeption und Implementierung einer relationalen <strong
                        class="text-violet-400">SQLite-Datenbank</strong
                    >
                    für die Kernprozesse eines Wasserfilter-Dienstleisters (Kunden-, Lager-, Auftrags- und Wartungsmanagement). Beinhaltet
                    <strong class="text-violet-400"
                        >normalisierte Schemas, Integritäts-Constraints, automatisierte Trigger</strong
                    > sowie abfrageoptimierte Views für zuverlässige Datenverarbeitung.
                </p>
            </Step>
            <Step step={projects[3]}>
                <p>
                    Full-Stack-Webanwendung mit <strong
                        class="text-violet-400"
                        >Python, Flask, Bootstrap und SQLite</strong
                    >
                    zur Verwaltung von Wartungszyklen und Ersatzteilbeständen für Umkehrosmoseanlagen. Umgesetzt mit
                    <strong class="text-violet-400"
                        >mehrschichtiger Architektur, objektorientiertem Design</strong
                    >, serverseitiger Datenvalidierung und strukturierter Fehlerbehandlung.
                </p>
            </Step>
            <!-- Last project spans both columns and centers itself -->
            <div class="lg:col-span-2 lg:place-self-center lg:w-1/2">
                <Step step={projects[4]}>
                    <p>
                        Plattformorientierter Android-Prototyp mit <strong class="text-violet-400"
                            >Flutter und lokaler SQLite-Persistenz</strong
                        >
                        zur strukturierten Steuerung von hochintensiven Trainingszyklen. Bietet Fortschritts-Tracking, automatische Leistungsdiagramme auf Basis von Fitnesstests sowie eine
                        <strong class="text-violet-400"
                            >Export- und Import-Funktion für Datenbank-Backups</strong
                        >.
                    </p>
                </Step>
            </div>
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
            <p class="text-lg sm:text-xl md:text-2xl text-violet-400">Praxis & Arbeitsweise</p>
            <h2 class="font-semibold text-3xl sm:text-4xl md:text-5xl">
                Was ich <span class="poppins text-violet-400">mitbringe</span>.
            </h2>
        </div>

        <!-- Benefits containers -->
        <div class="flex flex-col gap-16 w-full mx-auto max-w-[800px]">
            {#each benefits as benefit, index}
                <div class="flex gap-6 sm:gap-8 items-start">
                    <p
                        class="poppins-mono text-4xl sm:text-5xl md:text-6xl text-slate-500 font-semibold"
                    >
                        0{index + 1}
                    </p>

                    <div class="flex flex-col gap-3 sm:gap-4 flex-1">
                        <h3 class="text-2xl sm:text-3xl md:text-4xl font-semibold">
                            {benefit.name}
                        </h3>
                        <p class="text-slate-300 leading-relaxed">{benefit.description}</p>
                    </div>
                    <div
                        class="pt-2 text-4xl md:text-5xl text-violet-400 hidden sm:block"
                    >
                        <i class={benefit.icon}></i>
                    </div>
                </div>
            {/each}
        </div>

        <!-- Tech Stack & Certifications Matrix -->
        <div class="flex flex-col gap-8 max-w-[800px] mx-auto w-full">
            <h3 class="text-2xl sm:text-3xl font-semibold text-center poppins">
                Technischer Fokus & <span class="text-violet-400">Zertifizierungen</span>
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                {#each skills as skill}
                    <div class="border border-slate-700 bg-slate-900/50 rounded-lg p-5 flex flex-col gap-2">
                        <h4 class="text-violet-400 font-semibold text-lg">{skill.category}</h4>
                        <p class="text-slate-200 text-sm sm:text-base leading-relaxed">{skill.tools}</p>
                    </div>
                {/each}
            </div>
        </div>

        <p class="text-xl sm:text-2xl text-center poppins">
            Auf der Suche nach Verstärkung im Bereich Cloud, DevOps oder QA? <a href="#footer" class="text-violet-400 underline hover:text-violet-300">Lassen Sie uns sprechen.</a>
        </p>
    </section>
</main>