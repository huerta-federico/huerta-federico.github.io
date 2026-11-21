<script>
    import Main from "../../components/German/Main_de.svelte";
    import Footer from "../../components/German/Footer_de.svelte";
    import Header from "../../components/German/Header_de.svelte";

    let y = 0;
</script>

<svelte:head>
    <title>Federico Huerta – Cloud- &amp; QA-Engineer | Persönliches Portfolio</title>
    <meta
        name="description"
        content="Persönliches Portfolio von Federico Huerta – AWS-zertifizierter Cloud- & QA-Engineer mit FinTech-Erfahrung und M. Sc.-Student an der FAU Erlangen-Nürnberg."
    />
    <meta property="og:title" content="Federico Huerta – Cloud- & QA-Engineer" />
    <meta
        property="og:description"
        content="AWS-zertifizierter Cloud- & QA-Engineer mit FinTech-Erfahrung und M. Sc.-Student an der FAU Erlangen-Nürnberg."
    />
    <meta property="og:type" content="website" />
</svelte:head>

<Header {y} />
<Main />
<Footer />

<svelte:window bind:scrollY={y} />