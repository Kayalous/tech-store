<template>
  <div class="my-52">
      <div  class="mx-auto my-10 text-3xl font-bold text-center ">
          FIND US IN ONE OF THESE <span class="text-pink-500" id="lbl">LOCATIONS</span>
      </div>
    <GmapMap class="mx-auto border-2 border-pink-500 rounded-lg shadow-lg"
      :center='center'
      :zoom='12'
      style='width:50%;  height: 400px;'
    >
      <GmapMarker
        :key="index"
        v-for="(m, index) in markers"
        :position="m.position"
        @click="center=m.position"
      />
    </GmapMap>
  </div>
</template>

<script>
export default {
  name: 'MapSearch',
  data() {
    return {
      center: { lat: 45.508, lng: -73.587 },
      currentPlace: null,
      markers: [],
      places: [],
    }
  },
  mounted() {
    this.geolocate();
  },
  methods: {
    setPlace(place) {
      this.currentPlace = place;
    },
    addMarker() {
      if (this.currentPlace) {
        const marker = {
          lat: this.currentPlace.geometry.location.lat(),
          lng: this.currentPlace.geometry.location.lng(),
        };
        this.markers.push({ position: marker });
        this.places.push(this.currentPlace);
        this.center = marker;
        this.currentPlace = null;
      }
    },
    geolocate: function() {
      navigator.geolocation.getCurrentPosition(position => {
        this.center = {
          lat: position.coords.latitude,
          lng: position.coords.longitude,
        };
      });
    },
  },
};
</script>


<style>
#lbl
{
font-family: 'Yellowtail', cursive;}
</style>