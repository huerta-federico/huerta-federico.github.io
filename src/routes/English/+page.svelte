<script>
    import Main from "../../components/English/Main_eng.svelte";
    import Footer from "../../components/English/Footer_eng.svelte";
    import Header from "../../components/English/Header_eng.svelte";
    let y = 0;
    let innerWidth = 0;
    let innerHeight = 0;
</script>

<svelte:head>
    <title>Federico Huerta - IT Engineer | Personal Portfolio</title>
    <meta
        name="description"
        content="Personal portfolio of Federico Huerta, IT Engineer specialized in web development and systems."
    />
</svelte:head>

<Header {y} />
<Main />
<Footer />

<svelte:window bind:scrollY={y} bind:innerHeight bind:innerWidth />
