<script>
    import Step from "../Step.svelte";

    // Projects Array
    let goto_text = "Ver más ";
    let projects = [
        {
            name: "Portafolio personal en línea",
            icon: "fa-solid fa-briefcase",
            href: "https://github.com/huerta-federico/huerta-federico.github.io",
            goto: goto_text,
        },
        {
            name: "Despliegue completo y listo para producción de Nextcloud en AWS EKS",
            icon: "fa-solid fa-cloud",
            href: "https://github.com/huerta-federico/utpl-tic-public",
            goto: goto_text,
        },
        {
            name: "Base de datos relacional en SQLite",
            icon: "fa-solid fa-database",
            href: "https://youtu.be/h16s3onXESU",
            goto: goto_text,
        },
        {
            name: "Aplicación web con Flask, SQLite y Bootstrap",
            icon: "fa-brands fa-python",
            href: "https://youtu.be/_duh_q1e7HE",
            goto: goto_text,
        },
        {
            name: "App móvil con Flutter y SQLite para Android",
            icon: "fa-brands fa-android",
            href: "https://github.com/huerta-federico/insanity_tracker",
            goto: goto_text,
        },
    ];

    // Benefits Array
    let benefits = [
        {
            name: "impulsado por el aprendizaje y la mejora continua",
            icon: "fa-solid fa-code",
            description:
                "Siempre estoy motivado a ampliar mis conocimientos, explorando nuevos frameworks, herramientas y sistemas para perfeccionar mi experiencia. Mejorar constantemente lo que ya sé es una parte esencial de mi mentalidad de crecimiento.",
        },
        {
            name: "resolutivo y orientado a soluciones",
            icon: "fa-regular fa-lightbulb",
            description:
                "Me destaco en el análisis de desafíos técnicos complejos, desarrollando soluciones innovadoras y optimizando el rendimiento de sistemas con precisión y eficiencia.",
        },
        {
            name: "excelente en habilidades de comunicación",
            icon: "fa-solid fa-comments",
            description:
                "La comunicación efectiva genera mejores resultados para los equipos y las organizaciones, por eso priorizo la precisión, la transparencia y el respeto en cada interacción.",
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
                ¡Hola! Soy <span class="poppins text-violet-400"
                    >Federico Huerta</span
                >,
                <br />un
                <span class="poppins text-violet-400">Ingeniero de TI</span>
            </h2>

            <!-- Section subtitle -->
            <p class="text-base sm:text-lg md:text-xl">
                <span class="text-violet-400">Disfruto explorando</span> nuevas tecnologías,
                resolviendo problemas complejos y participando en proyectos de código
                abierto. Cuando no estoy inmerso en el mundo tech, probablemente
                me encuentres disfrutando de los videojuegos o de un buen libro.
            </p>

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
            <h6 class="text-large sm:text-xl md:text-xl">
                Algunos de mis proyectos
            </h6>
        </div>

        <!-- SOLUTION 1: Using CSS Grid with col-span and place-self -->
        <div
            class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-12 max-w-6xl mx-auto w-full"
        >
            <Step step={projects[0]}>
                <p>
                    Desarrollado con <strong class="text-violet-400"
                        >SvelteKit y Tailwind CSS</strong
                    >, adaptado para ser completamente responsivo en múltiples
                    tamaños de pantalla. Incluye un fondo animado con
                    JavaScript, simple pero elegante. Está alojado en
                    <strong class="text-violet-400">GitHub Pages</strong>
                    y se despliega automáticamente con un proceso de build y post-procesamiento
                    automatizado mediante
                    <strong class="text-violet-400">Node.js</strong> cuando se sube
                    una nueva versión al repositorio.
                </p>
            </Step>
            <Step step={projects[1]}>
                <p>
                    Un despliegue de <strong class="text-violet-400"
                        >Nextcloud</strong
                    >
                    totalmente containerizado, con escalabilidad horizontal, alta
                    disponibilidad e integraciones nativas en la nube. Incluye Collabora
                    Online, Talk (HPB), Redis Cluster, MariaDB Galera y notificaciones
                    push — todo orquestado con
                    <strong class="text-violet-400">Kubernetes</strong> y reforzado
                    con Ingress seguro, escalado automático y almacenamiento distribuido
                    persistente.
                </p>
            </Step>
            <Step step={projects[2]}>
                <p>
                    Base de datos en <strong class="text-violet-400"
                        >SQLite</strong
                    >
                    diseñada e implementada para gestionar las operaciones centrales
                    de un negocio de filtración de agua, incluyendo gestión de clientes,
                    inventario, pedidos y mantenimientos. El proyecto incluye
                    <strong class="text-violet-400"
                        >esquemas normalizados, integridad de datos mediante
                        restricciones, triggers automatizados y vistas
                        optimizadas para consultas</strong
                    >, demostrando sólidos conocimientos en diseño de bases de
                    datos y habilidades prácticas para la resolución de
                    problemas.
                </p>
            </Step>
            <Step step={projects[3]}>
                <p>
                    Aplicación web full-stack con <strong
                        class="text-violet-400"
                        >Flask, Bootstrap & SQLite</strong
                    >
                    para gestionar los mantenimientos de los sistemas de filtración
                    de agua de osmosis inversa, incluyendo el registro de clientes,
                    direcciones, mantenimientos e inventario. Este proyecto incluye
                    <strong class="text-violet-400"
                        >una BD normalizada, validación extensiva de datos,
                        gestión de errores, diseño responsivo, arquitectura de
                        múltiples capas, y programación orientada a objetos</strong
                    >, y resalta la aplicación de estándares de diseño,
                    desarrollo y documentación.
                </p>
            </Step>
            <!-- Last project spans both columns and centers itself -->
            <div class="lg:col-span-2 lg:place-self-center lg:w-1/2">
                <Step step={projects[4]}>
                    <p>
                        Aplicación móvil con <strong class="text-violet-400"
                            >Flutter para Android</strong
                        >
                        que me ayuda a manejar el programa de ejercicio físico
                        'Insanity Workout'. Me indica la rutina específica de
                        cada día y marcarla como completada o saltada. Muestra
                        el calendario del programa y registra estadísticas como
                        el número de ejercicios completados, ciclos completados,
                        etc. Incluye un formulario para las pruebas de
                        rendimiento, y genera una gráfica con base en los
                        resultados. Funciona mediante
                        <strong class="text-violet-400"
                            >una base de datos local. Es responsiva y animada.
                            Tiene funcionalidades dinámicas que se actualizan
                            automaticamente. Permite exportar la base de datos
                            como respaldo, e importarla posteriormente para
                            restaurar los datos.</strong
                        > La aplicación es un prototipo y estoy planeando añadir
                        más funcionalidades y pulir el comportamiendo.
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
        <br />
        <div
            class="flex flex-col gap-2 text-center relative before:absolute before:top-0 before:left-0 before:w-2/3 before:h-1.5 before:bg-violet-700 after:absolute after:bottom-0 after:right-0 after:w-2/3 after:h-1.5 after:bg-violet-700 py-4"
        >
            <h6 class="text-lg sm:text-xl md:text-2xl">
                ¿Quieres conocer más?
            </h6>
            <h3 class="font-semibold text-3xl sm:text-4xl md:text-5xl">
                Un poco <span class="poppins text-violet-400">acerca</span> de mí.
            </h3>
        </div>
        <p class="mx-auto poppins font-semibold text-lg sm:text-xl md:text-2xl">
            Yo soy . . .
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
            El paquete <span class="text-violet-400">completo</span>
        </h5>
        <div
            class="flex flex-col overflow-x-scroll gap-10 max-w-[800px] mx-auto w-full"
        >
            <table class="bg-white text-slate-700 rounded text-center">
                <thead class={"border-b border-solid border-slate-200  "}>
                    <tr class="">
                        <th></th>
                        <th class="whitespace-nowrap p-2 px-4">Candidato A</th>
                        <th class="whitespace-nowrap p-2 px-4">Candidato B</th>
                        <th class="whitespace-nowrap p-2 px-4">Candidato C</th>
                        <th
                            class="bg-violet-700 text-white whitespace-nowrap p-4 px-8"
                            >Yo</th
                        >
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-solid border-slate-200">
                        <td
                            class="border-r border-solid border-white pl-4 pr-8 py-4 font-semibold text-sm"
                            >Dedicación</td
                        >
                        <td><i class="fa-solid fa-xmark text-slate-500"></i></td
                        >
                        <td><i class="fa-solid fa-check text-slate-500"></i></td
                        >
                        <td><i class="fa-solid fa-xmark text-slate-500"></i></td
                        >
                        <td><i class="fa-solid fa-check text-green-500"></i></td
                        >
                    </tr>
                    <tr class="border-b border-solid border-slate-200">
                        <td
                            class="border-r border-solid border-white pl-4 pr-8 py-4 font-semibold text-sm"
                            >Pensamiento crítico</td
                        >
                        <td><i class="fa-solid fa-xmark text-slate-500"></i></td
                        >
                        <td><i class="fa-solid fa-check text-slate-500"></i></td
                        >
                        <td><i class="fa-solid fa-check text-slate-500"></i></td
                        >
                        <td><i class="fa-solid fa-check text-green-500"></i></td
                        >
                    </tr>
                    <tr>
                        <td
                            class="border-r border-solid border-white pl-4 pr-8 py-4 font-semibold text-sm"
                            >Habilidades interpersonales</td
                        >
                        <td><i class="fa-solid fa-check text-slate-500"></i></td
                        >
                        <td><i class="fa-solid fa-check text-slate-500"></i></td
                        >
                        <td><i class="fa-solid fa-xmark text-slate-500"></i></td
                        >
                        <td><i class="fa-solid fa-check text-green-500"></i></td
                        >
                    </tr>
                    <tr class="border-t border-solid border-slate-200">
                        <td
                            class="border-r border-solid border-white pl-4 pr-8 py-4 font-semibold text-sm"
                            >Habilidad de programación</td
                        >
                        <td><i class="fa-solid fa-check text-slate-500"></i></td
                        >
                        <td><i class="fa-solid fa-xmark text-slate-500"></i></td
                        >
                        <td><i class="fa-solid fa-check text-slate-500"></i></td
                        >
                        <td><i class="fa-solid fa-check text-green-500"></i></td
                        >
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Table hint for overflow -->
        <div class="mx-auto -mt-12 italic sm:hidden opacity-50">
            <p>Continua para ver más &rarr;</p>
        </div>
        <h6 class={" text-1xl sm:text-2xl text-center poppins "}>
            ¿Por qué no invertir en mí?
        </h6>
    </section>
</main>
