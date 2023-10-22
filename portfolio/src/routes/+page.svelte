<script>
    import Main from "../components/Spanish/Main_spa.svelte";
    import Footer from "../components/Spanish/Footer_spa.svelte";
    import Header from "../components/Spanish/Header_spa.svelte";
    let y;
    let innerWidth = 0;
    let innerHeight = 0;
</script>

<Header {y} {innerHeight} />
<Main />
<Footer />

<svelte:window bind:scrollY={y} bind:innerHeight bind:innerWidth />
