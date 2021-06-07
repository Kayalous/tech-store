<template>
    <div id="app" class="flex flex-col w-full min-h-screen">
        <Navbar/>
        <div class="flex-grow">
            <slot></slot>
        </div>
        <Footer/>
    </div>
</template>

<script>
import Navbar from '../components/Navbar'
import Footer from '../components/Footer'

export default {

    components: {
        Navbar,
        Footer

    },
};
</script>

<style>

@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');

</style>
