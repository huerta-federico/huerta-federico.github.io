<script>
    import Step from "../Step.svelte";

    // Projects Array
    let goto_text = "Ver proyecto ";
    let projects = [
        {
            name: "Portafolio personal en línea",
            icon: "fa-solid fa-briefcase",
            href: "https://github.com/huerta-federico/huerta-federico.github.io",
            goto: goto_text,
        },
        {
            name: "Nextcloud de alta disponibilidad en AWS EKS (Tesis de grado)",
            icon: "fa-solid fa-cloud",
            href: "https://github.com/huerta-federico/utpl-tic-public",
            goto: goto_text,
        },
        {
            name: "Base de datos relacional en SQLite para gestión operativa",
            icon: "fa-solid fa-database",
            href: "https://youtu.be/h16s3onXESU",
            goto: goto_text,
        },
        {
            name: "Aplicación web Full-Stack con Flask y SQLite",
            icon: "fa-brands fa-python",
            href: "https://youtu.be/_duh_q1e7HE",
            goto: goto_text,
        },
        {
            name: "App móvil de seguimiento físico con Flutter y SQLite",
            icon: "fa-brands fa-android",
            href: "https://github.com/huerta-federico/insanity_tracker",
            goto: goto_text,
        },
    ];

    // Benefits Array (Backed by real CV achievements)
    let benefits = [
        {
            name: "Excelencia operativa y automatización",
            icon: "fa-solid fa-terminal",
            description:
                "En entornos FinTech 24/7 cada minuto cuenta. Mediante scripts de automatización en Bash reduje los tiempos de respuesta ante incidentes de horas a minutos y aseguré despliegues en producción para sistemas Java/Spring Boot.",
        },
        {
            name: "Optimización de rendimiento y bases de datos",
            icon: "fa-solid fa-gauge-high",
            description:
                "Diagnostico cuellos de botella hasta el nivel de base de datos: resolví errores latentes de integridad y optimicé consultas en SQL Server y Oracle PL/SQL logrando reducir la carga de I/O en un 99,9 %.",
        },
        {
            name: "Puente entre ingeniería y stakeholders",
            icon: "fa-solid fa-comments",
            description:
                "Con experiencia directa en soporte a clientes FinTech, comunicación multilingüe (español nativo, inglés C2, alemán B2) y mi maestría en la FAU, traduzco incidentes y requerimientos complejos en soluciones claras y accionables.",
        },
    ];

    // Tech Stack & Certifications Matrix (Updated from CV)
    let skills = [
        {
            category: "Cloud, DevOps y Observabilidad",
            tools: "AWS (EKS, EC2, S3, RDS, Aurora), Azure, Kubernetes, Docker, Helm, GitHub Actions, OpenSearch, FluentD, Azure Monitor",
        },
        {
            category: "Bases de datos e Ingeniería de Datos",
            tools: "Microsoft SQL Server, Oracle PL/SQL, MariaDB Galera, MySQL, SQLite, Redis, ETL en AWS, Pandas, Power BI",
        },
        {
            category: "Desarrollo y Sistemas Operativos",
            tools: "Java (Spring Boot), Python (Flask), Bash, JavaScript/TypeScript, SvelteKit, Flutter, Linux (RedHat), Windows Server",
        },
        {
            category: "Certificaciones e IA / Machine Learning",
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
                ¡Hola! Soy <span class="poppins text-violet-400"
                    >Federico Huerta</span
                >,
                <br />
                <span class="poppins text-violet-400">Ingeniero Cloud y QA</span>
            </h1>

            <!-- Section subtitle -->
            <p class="text-base sm:text-lg md:text-xl leading-relaxed">
                <span class="text-violet-400 font-medium">Ingeniero en TI certificado en AWS</span> con experiencia en el sector FinTech en despliegues de producción 24/7, respuesta ante incidentes y optimización de bases de datos — actualmente cursando el máster <span class="text-violet-400 font-medium">International Information Systems (M. Sc.)</span> en la <span class="text-violet-400 font-medium">FAU Erlangen-Nürnberg</span>.
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
                <h4 class="relative z-9">Contáctame &rarr;</h4>
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
                Portafolio
            </p>
            <h2 class="font-semibold text-3xl sm:text-4xl md:text-5xl">
                Proyectos <span class="poppins text-violet-400">destacados</span>
            </h2>
        </div>

        <div
            class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-12 max-w-6xl mx-auto w-full"
        >
            <Step step={projects[0]}>
                <p>
                    Portafolio web responsivo desarrollado con <strong class="text-violet-400"
                        >SvelteKit y Tailwind CSS</strong
                    >, con animaciones fluidas en JavaScript. Alojado en
                    <strong class="text-violet-400">GitHub Pages</strong>
                    y desplegado mediante un flujo automatizado de compilación y post-procesamiento con
                    <strong class="text-violet-400">Node.js</strong>.
                </p>
            </Step>
            <Step step={projects[1]}>
                <p>
                    Clúster escalable horizontalmente y listo para producción de <strong class="text-violet-400"
                        >Nextcloud en AWS EKS</strong
                    > (tesis de grado distinguida). Orquestado con <strong class="text-violet-400">Kubernetes y Helm</strong> integrando Collabora Online, Talk, <strong class="text-violet-400">MariaDB Galera y Redis Cluster</strong> — obteniendo <strong class="text-violet-400">calificaciones de seguridad A+</strong> y <strong class="text-violet-400">tasas de transferencia un 136 % más rápidas</strong> que OneDrive.
                </p>
            </Step>
            <Step step={projects[2]}>
                <p>
                    Diseño e implementación de una base de datos relacional en <strong class="text-violet-400"
                        >SQLite</strong
                    >
                    para gestionar las operaciones principales de una empresa de filtración de agua (clientes, inventario, pedidos y mantenimientos). Incorpora
                    <strong class="text-violet-400"
                        >esquemas normalizados, restricciones de integridad y triggers automatizados</strong
                    >, junto con vistas optimizadas para consultas eficientes.
                </p>
            </Step>
            <Step step={projects[3]}>
                <p>
                    Aplicación web full-stack desarrollada con <strong
                        class="text-violet-400"
                        >Python, Flask, Bootstrap y SQLite</strong
                    >
                    para administrar ciclos de mantenimiento e inventario de repuestos en sistemas de ósmosis inversa. Construida bajo una
                    <strong class="text-violet-400"
                        >arquitectura multicapa y programación orientada a objetos</strong
                    >, con validación de datos del lado del servidor y manejo estructurado de errores.
                </p>
            </Step>
            <!-- Last project spans both columns and centers itself -->
            <div class="lg:col-span-2 lg:place-self-center lg:w-1/2">
                <Step step={projects[4]}>
                    <p>
                        Prototipo móvil para Android desarrollado con <strong class="text-violet-400"
                            >Flutter y persistencia local en SQLite</strong
                        >
                        para la gestión estructurada de rutinas de entrenamiento de alta intensidad. Incluye calendario de sesiones, gráficos automáticos de progreso a partir de pruebas físicas y
                        <strong class="text-violet-400"
                            >exportación e importación de copias de seguridad de la base de datos</strong
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
            <p class="text-lg sm:text-xl md:text-2xl text-violet-400">
                Experiencia y enfoque
            </p>
            <h2 class="font-semibold text-3xl sm:text-4xl md:text-5xl">
                Lo que <span class="poppins text-violet-400">aporto</span> al equipo.
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
                Enfoque técnico y <span class="text-violet-400">certificaciones</span>
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
            ¿Buscas apoyo en Cloud, DevOps o QA? <a href="#footer" class="text-violet-400 underline hover:text-violet-300">Conversemos.</a>
        </p>
    </section>
</main>