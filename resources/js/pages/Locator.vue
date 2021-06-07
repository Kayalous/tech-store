<template>
    <AppLayout>

        <div>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6821.130844072498!2d30.006826917305457!3d31.260451624094205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5da9e67ed8e3d%3A0xaed6f3f8f35c7a4a!2zMzHCsDE2JzAwLjIiTiAzMMKwMDAnMDUuNiJF!5e0!3m2!1sen!2seg!4v1622925715213!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
            <MapSearch/>
        </div>
    </AppLayout>

</template>

<script>

import MapSearch from '../components/MapSearch'

import AppLayout from '../templates/AppTemplate'

export default {

    components: {
        MapSearch, AppLayout
    },


};


</script>
