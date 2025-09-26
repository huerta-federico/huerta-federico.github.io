<script>
    import Main from "../components/Spanish/Main_spa.svelte";
    import Footer from "../components/Spanish/Footer_spa.svelte";
    import Header from "../components/Spanish/Header_spa.svelte";
    export let y = 0;
    let innerWidth = 0;
    export let innerHeight = 0;
</script>

<Header {y} />
<Main />
<Footer />

<svelte:window bind:scrollY={y} bind:innerHeight bind:innerWidth />
