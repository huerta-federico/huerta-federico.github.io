<script>
    import Main from "../components/Spanish/Main_spa.svelte";
    import Footer from "../components/Spanish/Footer_spa.svelte";
    import Header from "../components/Spanish/Header_spa.svelte";
    export let y = 0;
    let innerWidth = 0;
    export let innerHeight = 0;
</script>

<svelte:head>
    <title>Federico Huerta - Ingeniero en TI | Portfolio Personal</title>
    <meta
        name="description"
        content="Portfolio personal de Federico Huerta, Ingeniero en TI especializado en desarrollo web y sistemas."
    />
</svelte:head>

<Header {y} />
<Main />
<Footer />

<svelte:window bind:scrollY={y} bind:innerHeight bind:innerWidth />
