<script>
    import Main from '../../components/Spanish/Main_spa.svelte'
    import Footer from "../../components/Spanish/Footer_spa.svelte";
    import Header from "../../components/Spanish/Header_spa.svelte";
    let y;
</script>
<Header {y} />
<Main />
<Footer />
<svelte:window bind:scrollY={y} />