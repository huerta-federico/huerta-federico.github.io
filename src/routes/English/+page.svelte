<script>
    import Main from "../../components/English/Main_eng.svelte";
    import Footer from "../../components/English/Footer_eng.svelte";
    import Header from "../../components/English/Header_eng.svelte";

    let y = 0;
</script>

<svelte:head>
    <title>Federico Huerta – Cloud &amp; QA Engineer | Personal Portfolio</title>
    <meta
        name="description"
        content="Personal portfolio of Federico Huerta – AWS-certified Cloud & QA Engineer with FinTech experience and M.Sc. student at FAU Erlangen-Nürnberg."
    />
    <meta property="og:title" content="Federico Huerta – Cloud & QA Engineer" />
    <meta
        property="og:description"
        content="AWS-certified Cloud & QA Engineer with FinTech experience and M.Sc. student at FAU Erlangen-Nürnberg."
    />
    <meta property="og:type" content="website" />
</svelte:head>

<Header {y} />
<Main />
<Footer />

<svelte:window bind:scrollY={y} />