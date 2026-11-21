<script>
    import Main from "../components/Spanish/Main_spa.svelte";
    import Footer from "../components/Spanish/Footer_spa.svelte";
    import Header from "../components/Spanish/Header_spa.svelte";

    let y = 0;
</script>

<svelte:head>
    <title>Federico Huerta – Ingeniero Cloud y QA | Portafolio Personal</title>
    <meta
        name="description"
        content="Portafolio personal de Federico Huerta – Ingeniero Cloud y QA certificado en AWS con experiencia en FinTech y estudiante de maestría en la FAU Erlangen-Nürnberg."
    />
    <meta property="og:title" content="Federico Huerta – Ingeniero Cloud y QA" />
    <meta
        property="og:description"
        content="Ingeniero Cloud y QA certificado en AWS con experiencia en FinTech y estudiante de maestría en la FAU Erlangen-Nürnberg."
    />
    <meta property="og:type" content="website" />
</svelte:head>

<Header {y} />
<Main />
<Footer />

<svelte:window bind:scrollY={y} />