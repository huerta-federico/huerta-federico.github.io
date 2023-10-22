<script>
    import Main from "../../components/English/Main_eng.svelte";
    import Footer from "../../components/English/Footer_eng.svelte";
    import Header from "../../components/English/Header_eng.svelte";
    let y;
    let innerWidth = 0;
    let innerHeight = 0;
</script>

<Header {y} {innerHeight} />
<Main />
<Footer />

<svelte:window bind:scrollY={y} bind:innerHeight bind:innerWidth />