<template>
    <header class="fixed top-0 z-50 w-full h-16 text-gray-700 bg-pink-500 md:mt-0 md:fixed">
        <vue-scroll-progress-bar @complete="handleComplete" height="0.25rem" containerColor="#FFFFFF"
                                 backgroundColor="#E94799"/>

        <div
            class="flex flex-col max-w-screen-xl mx-auto naver w-screen-xl lg: rounded-b-2xl md:items-center md:justify-between mb-44 md:flex-row md:px-6 lg:w-full">
            <div class="flex flex-row items-center justify-between p-4">
                <a href="/"
                   class="text-lg font-semibold tracking-widest text-gray-200 uppercase rounded-lg dark-mode:text-white focus:outline-none hover: focus:shadow-outline ">Techio
                    Store</a>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline">
                    <svg fill="white" viewBox="0 0 20 20" class="w-6 h-6">
                        <path fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                              clip-rule="evenodd"></path>
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav
                class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row md:items-center">


                <a
                    class="px-4 py-2 mt-2 text-sm font-semibold text-white text-gray-200 bg-transparent rounded-lg md:mt-0 md:ml-4 focus:text-pink-500 focus:p-2 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    :href="route('home')"
                    :active="route().current('home')">
                </a>

                <a
                    class="px-4 py-2 mt-2 text-sm font-semibold text-white text-gray-200 bg-transparent rounded-lg md:mt-0 md:ml-4 xl: focus:text-pink-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    :href="route('about')"
                    :active="route().current('about')"
                >
                    About
                </a>


                <!-- <routerlin class="px-4 py-2 mt-2 text-sm font-semibold text-white text-gray-200 bg-transparent rounded-lg md:mt-0 md:ml-4 xl: focus:text-pink-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                  href="contact.html">Contact Us</routerlin> -->
                <a
                    class="px-4 py-2 mt-2 text-sm font-semibold text-white text-gray-200 bg-transparent rounded-lg md:mt-0 md:ml-4 xl: focus:text-pink-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    :href="route('locator')"
                    :active="route().current('locator')"
                >
                    Shop Locator
                </a>

                <div class="relative">
                    <button
                        @click="shopOpen = !shopOpen"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left text-gray-200 bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-200 focus:text-gray-200 focus:outline-none focus:shadow-outline">
                        <span>Shop</span>
                        <svg fill="currentColor" viewBox="0 0 20 20"
                             :class="{'rotate-180': shopOpen, 'rotate-0': !shopOpen}"
                             class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- x-show="open" x-transition:enter="transition ease-out duration-100"
                      x-transition:enter-start="transform opacity-0 scale-95"
                      x-transition:enter-end="transform opacity-100 scale-100"
                      x-transition:leave="transition ease-in duration-75"
                      x-transition:leave-start="transform opacity-100 scale-100"
                      x-transition:leave-end="transform opacity-0 scale-95" -->
                    <transition name="shop">


                        <div
                            v-if="shopOpen"
                            class="absolute right-0 w-full mt-2 origin-top-right md:max-w-screen-sm md:w-screen">
                            <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark-mode:bg-gray-700">
                                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                    <a class="flex items-start p-2 bg-transparent rounded-lg row hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                       href="#">
                                        <div class="p-3 text-white bg-teal-500 rounded-lg">
                                            <i class="text-3xl text-pink-400 fas fa-mobile-alt"></i></div>
                                        <div class="mt-3 ml-3">
                                            <p class="font-semibold text-pink-400">Phones</p>
                                        </div>
                                    </a>

                                    <a class="flex items-start p-2 bg-transparent rounded-lg row hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                       href="#">
                                        <div class="p-3 text-white bg-teal-500 rounded-lg">
                                            <i class="text-xl text-pink-400 fas fa-tablet-alt"></i></div>
                                        <div class="mt-3 ml-3">
                                            <p class="font-semibold text-pink-400">Tablets</p>
                                        </div>
                                    </a>

                                    <a class="flex items-start p-2 bg-transparent rounded-lg row hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                       href="#">
                                        <div class="p-3 text-white bg-teal-500 rounded-lg">
                                            <i class="text-xl text-pink-400 fas fa-laptop"></i>

                                        </div>
                                        <div class="mt-3 ml-3">
                                            <p class="font-semibold text-pink-400">Laptops</p>
                                        </div>
                                    </a>
                                    <a class="flex items-start p-2 bg-transparent rounded-lg row hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                       href="#">
                                        <div class="p-3 text-white bg-teal-500 rounded-lg">
                                            <i class="text-xl text-pink-400 fas fa-headphones"></i>

                                        </div>
                                        <div class="mt-3 ml-3">
                                            <p class="font-semibold text-pink-400">Accessories</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </transition>
                </div>
                <div class="flex" v-if="$page.props.auth.user">

                    <div class="flex items-center justify-center invisible md:visible ">

                        <div class="relative">
                            <button
                                @click="cartOpen = !cartOpen"
                                class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left text-gray-200 bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-200 focus:text-gray-200 focus:outline-none focus:shadow-outline">
                                <span><i class="text-xl fas fa-shopping-basket"></i></span>
                                <svg fill="currentColor" viewBox="0 0 20 20"
                                     :class="{'rotate-180': cartOpen, 'rotate-0': !cartOpen}"
                                     class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </button>

                            <transition name="cart">
                                <div

                                    v-if="cartOpen"
                                    class="absolute w-full mt-2 origin-top-right right-50 md:max-w-screen-sm md:w-screen ">

                                    <div v-for="(item,index) in $page.props.cart" :key="item.id"
                                         class="w-1/2 px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark-mode:bg-gray-700">
                                        <div class="flex flex-col space-y-2">
                                            <div class="flex flex-row justify-around text-sm">

                                                <div class="w-1/2 align-middle ">
                                                    <img v-bind:src="item.image" alt="">
                                                </div>
                                                <div class="p-1">
                                                    <p>{{ item.name }}
                                                    </p>
                                                    <p class="font-semibold">
                                                        {{ item.pivot_qty }}</p>
                                                    <p class="font-bold">{{ item.price }}

                                                    </p>
                                                </div>
                                                <div>
                                                    <i @click="remove(item.id)"
                                                       class="items-end self-end mt-16 text-xl text-pink-500 trash far fa-trash-alt"></i>
                                                </div>

                                            </div>

                                            <a to="/cart">
                                                <div
                                                    class="flex justify-center w-1/2 p-1 mx-auto text-white bg-pink-500 rounded-md cursor-pointer align-center">
                                                    Cart
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </transition>
                        </div>


                    </div>
                    <div class="flex items-center justify-center invisible md:visible ">

                        <div class="relative">
                            <button
                                @click="profOpen = !profOpen"
                                class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left text-gray-200 bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-200 focus:text-gray-200 focus:outline-none focus:shadow-outline">
                                <span><i class="text-xl text-white fas fa-user"></i></span>
                                <svg fill="currentColor" viewBox="0 0 20 20"
                                     :class="{'rotate-180': profOpen, 'rotate-0': !profOpen}"
                                     class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </button>

                            <transition name="cart">
                                <div

                                    v-if="profOpen"
                                    class="absolute w-full mt-2 origin-top-right right-50 md:max-w-screen-sm md:w-screen ">
                                    <div
                                        class="w-1/2 px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark-mode:bg-gray-700">
                                        <div class="mx-auto my-6 text-center">
                                            <p>Hello, {{ $page.props.auth.user.name }}</p>
                                            <!-- Authentication -->
                                            <form method="POST" @submit.prevent="logout">
                                                <button>
                                                    Logout
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </transition>
                        </div>


                    </div>
                </div>
                <div v-else>
                    <a
                        class="px-4 py-2 mt-2 text-sm font-semibold text-white text-gray-200 bg-transparent rounded-lg md:mt-0 md:ml-4 focus:text-pink-500 focus:p-2 focus:bg-gray-200 focus:outline-none focus:shadow-outline"

                        :href="route('login')"
                        :active="route().current('login')"
                    >
                        Login
                    </a>

                    <a
                        class="px-4 py-2 mt-2 text-sm font-semibold text-white text-gray-200 bg-transparent rounded-lg md:mt-0 md:ml-4 focus:text-pink-500 focus:p-2 focus:bg-gray-200 focus:outline-none focus:shadow-outline"

                        :href="route('register')"
                        :active="route().current('register')"
                    >
                        Register
                    </a>
                </div>

            </nav>

        </div>

    </header>
</template>


<script>


export default {
    data: () => ({
        cartOpen: false,
        shopOpen: false,
        profOpen: false,
        newItem: '',
        items: [
            {
                'id': 1,
                'img': 'https://tradelinestores.s3.amazonaws.com/media/product_images/f183313a-9cf3-468f-8a74-ab4825835913.jpg',
                'name': 'iPhone 12 Pro Max, iPhone 12 Pro Max - Graphite, 128 GB',
                'qty': 1,
                'price': 26000,
            },
            {
                'id': 2,
                'img': 'https://tradelinestores.s3.amazonaws.com/media/product_images/f183313a-9cf3-468f-8a74-ab4825835913.jpg',
                'name': 'iPhone 11 Pro Max, iPhone 12 Pro Max - Graphite, 128 GB',
                'qty': 1,
                'price': 23000,
            },
        ],
        newUser: '',
        // users:
        //  [
        //   {
        //      'id': 1,
        //    'user': omar,
        //    'pass': omaromar,

        //    },
        //   {
        //      'id': 1,
        //      'user': test,
        //    'pass': testtest,

        //    },

        //  ]


    }),
    mounted() {
        console.log(this.$page.props.auth.user)
    },
    methods:
        {
            remove(id) {
                let form = this.$inertia.form({'product_id': id})

                form.delete(route('cart.remove'), {
                    preserveScroll: true,
                    onSuccess: () => {
                        this.$toast.open({
                            message: 'Item removed!',
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
            handleComplete() {

            },
            logout() {
                this.$inertia.post(route("logout"));
            },

            // checkForm(user, password)
            // {
            //   if (user.id == passowrd.id)
            //   {
            //     alert("login success");
            //   }
            //   else
            //   {
            //     alert("zby");
            //   }
            // }
        }
}

</script>

<style>
.progress-container {
    width: 100%;
    height: 8px;
    background: #ccc;
}

/* The progress bar (scroll indicator) */
.progress-bar {
    height: 8px;
    background: #04AA6D;
    width: 0%;
}

.cart-enter-active, .cart-leave-active {
    /* transition: opacity .5s; */
    @apply transition ease-out duration-100;
}

.cart-enter, .cart-leave-to /* .fade-leave-active below version 2.1.8 */
{
    /* opacity: 0; */
    @apply transform opacity-0 scale-95;
}

.shop-enter-active, .shop-leave-active {
    /* transition: opacity .5s; */
    @apply transition ease-out duration-100;
}

.shop-enter, .shop-leave-to /* .fade-leave-active below version 2.1.8 */
{
    /* opacity: 0; */
    @apply transform opacity-0 scale-95;
}

.profile-enter-active, .profile-leave-active {
    /* transition: opacity .5s; */
    @apply transition ease-out duration-100;
}

.shop-profile, .profile-leave-to /* .fade-leave-active below version 2.1.8 */
{
    /* opacity: 0; */
    @apply transform opacity-0 scale-95;
}
</style>
