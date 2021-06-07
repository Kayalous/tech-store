<template>
    <AppLayout>

        <div class="flex flex-row ">
            <div class="w-full">
                <div class="p-20 mx-auto text-center bg-pink-500 justify-items-center">
                    <div class="flex justify-center mx-auto my-20 align-middle">
                        <p class="mt-2 text-white">Price Range: </p>
                        <VueSimpleRangeSlider class=""
                                              style="width: 300px"
                                              :min="minPrice"
                                              :max="maxPrice"
                                              v-model="range"
                                              activeBarColor="#E9F79F"
                        />
                    </div>

                    <div class="inline-block group">
                        <button
                            class="flex items-center px-3 py-1 bg-white border rounded-sm outline-none focus:outline-none min-w-32"
                        >
                            <span class="flex-1 pr-1 font-semibold">Sort By:</span>
                            <span>
      <svg
          class="w-4 h-4 transition duration-150 ease-in-out transform fill-current group-hover:-rotate-180"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20"
      >
        <path
            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
        />
      </svg>
    </span>
                        </button>
                        <ul
                            class="absolute transition duration-150 ease-in-out origin-top transform scale-0 bg-white border rounded-sm group-hover:scale-100 min-w-32"
                        >
                            <li @click="sort = 'asc'" class="cursor-pointer px-3 py-1 rounded-sm hover:bg-gray-100">
                                Price (Asc)
                            </li>
                            <li @click="sort = 'desc'" class="cursor-pointer px-3 py-1 rounded-sm hover:bg-gray-100">
                                Price (Desc)
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="flex flex-col justify-center items-center container mx-auto">
                    <div class="grid justify-center grid-cols-3 p-6 gap-y-2 gap-x-0 ">
                        <div v-for="item in products.data " :key="item.id">
                            <div class="w-1/2 p-2 bg-white rounded-md shadow-lg">
                                <img class="mx-auto" v-bind:src="item.image" alt="">
                                <a :href="`/product/${item.id}`" class="p-2 my-4">{{ item.name }}</a>
                                <div class="flex justify-around my-4 align-middle">
                                    <p class="p-2">{{ item.price }} EGP</p>
                                    <button @click="add(item.id)" class="p-2 text-white bg-pink-500 rounded-md">Add To
                                        Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <Paginator class="my-10" :links="items.links"/>

                </div>

            </div>
        </div>
    </AppLayout>

</template>
<script>
import _ from 'lodash';

import VueSimpleRangeSlider from 'vue-simple-range-slider';
import 'vue-simple-range-slider/dist/vueSimpleRangeSlider.css'

import AppLayout from '../templates/AppTemplate'
import Paginator from "../components/Paginator";

export default {

    components: {
        VueSimpleRangeSlider, AppLayout, Paginator
    },
    props: ['items', 'minPrice', 'maxPrice', 'dicky'],
    data: () => {
        return {
            range: [],
            number: 10,
            category: ['mobile', 'phone'],
            selectedCat: [''],
            sort: 'desc',
            products: []
        }
    },
    mounted() {
        this.range = [this.minPrice, this.maxPrice]
        this.products = this.items
    },
    methods: {
        add(id) {
            let form = this.$inertia.form({'product_id': id})

            form.post(route('cart.add'), {
                preserveScroll: true,
                onSuccess: () => {
                    this.$toast.open({
                        message: 'Item added to cart!',
                        type: 'success',
                        duration: 1000,
                        position: 'top'
                    })
                },
                onError: () => {
                },
                onFinish: () => {
                },
            })
        },
        getNewData() {
            let vm = this;
            const requestOptions = {
                method: "GET",
                body: {
                    'sortBy': vm.sort,
                    'minPrice': vm.range[0],
                    'maxPrice': vm.range[1]
                }
            };
            this.axios({
                method: "post",
                url: route('shop.filter'),
                data: {
                    'sortBy': vm.sort,
                    'minPrice': vm.range[0],
                    'maxPrice': vm.range[1]
                },
                headers: {
                    'X-CSRF-TOKEN': token
                }
            })
                .then((response) => {

                    vm.products = response.data.items
                })

        },
    },
    watch: {
        sort: function () {
            this.getNewData();
        },
        range: function () {
            this.getNewData();
        },

    },
    computed: {
        activeCards: function () {
            if (this.selectedCat.length == 0) return this.items;

            var activeCards = [];
            var filters = this.selectedCat;

            this.items.forEach(function (item) {

                function cardContainsFilter(filter) {
                    return item.category.indexOf(filter) != -1;
                }

                if (filters.every(cardContainsFilter)) {
                    activeCards.push(item);
                }
            });

            return activeCards;
        },

        Prices: function () {
            return _.orderBy(this.items.data, 'price')
        }
    }
}
</script>


<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap');


p {
    font-family: 'Roboto', sans-serif;
    font-weight: 400;

}


li > ul {
    transform: translatex(100%) scale(0)
}

li:hover > ul {
    transform: translatex(101%) scale(1)
}

li > button svg {
    transform: rotate(-90deg)
}

li:hover > button svg {
    transform: rotate(-270deg)
}

/* Below styles fake what can be achieved with the tailwind config
   you need to add the group-hover variant to scale and define your custom
   min width style.
     See https://codesandbox.io/s/tailwindcss-multilevel-dropdown-y91j7?file=/index.html
     for implementation with config file
*/
.group:hover .group-hover\:scale-100 {
    transform: scale(1)
}

.group:hover .group-hover\:-rotate-180 {
    transform: rotate(180deg)
}

.scale-0 {
    transform: scale(0)
}

.min-w-32 {
    min-width: 8rem
}
</style>

