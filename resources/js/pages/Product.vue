<template>
    <AppLayout>

        <div class="my-20">
            <section class="overflow-hidden text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap mx-auto lg:w-4/5">
                        <img alt="ecommerce" class="object-cover object-center w-full h-64 rounded lg:w-1/2 lg:h-auto"
                             :src="item.image">
                        <div class="w-full mt-6 lg:w-1/2 lg:pl-10 lg:py-6 lg:mt-0">
                            <h2 class="text-sm tracking-widest text-gray-500 title-font">Apple</h2>
                            <h1 class="mb-1 text-3xl font-medium text-gray-900 title-font">{{ item.name }}</h1>
                            <div class="flex mb-4">
          <span class="flex items-center">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                 stroke-width="2" class="w-4 h-4 text-pink-500" viewBox="0 0 24 24">
              <path
                  d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                 stroke-width="2" class="w-4 h-4 text-pink-500" viewBox="0 0 24 24">
              <path
                  d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                 stroke-width="2" class="w-4 h-4 text-pink-500" viewBox="0 0 24 24">
              <path
                  d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                 stroke-width="2" class="w-4 h-4 text-pink-500" viewBox="0 0 24 24">
              <path
                  d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 class="w-4 h-4 text-pink-500" viewBox="0 0 24 24">
              <path
                  d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <span class="ml-3 text-gray-600">4 Reviews</span>
          </span>
                                <span class="flex py-2 pl-3 ml-3 border-l-2 border-gray-200 space-x-2s">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                   viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                   viewBox="0 0 24 24">
                <path
                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                   viewBox="0 0 24 24">
                <path
                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
                            </div>
                            <p class="leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen
                                book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <div class="flex items-center pb-5 mt-6 mb-5 border-b-2 border-gray-100">
                                <div class="flex">
                                    <span class="mr-3">Color</span>
                                    <button
                                        class="w-6 h-6 border-2 border-gray-300 rounded-full focus:outline-none"></button>
                                    <button
                                        class="w-6 h-6 ml-1 bg-gray-700 border-2 border-gray-300 rounded-full focus:outline-none"></button>
                                    <button
                                        class="w-6 h-6 ml-1 bg-pink-500 border-2 border-gray-300 rounded-full focus:outline-none"></button>
                                </div>

                            </div>
                            <div class="flex">
                                <span class="text-2xl font-medium text-gray-900 title-font">{{ item.price }} EGP</span>
                                <button
                                    @click="add(item.id)"
                                    class="flex px-6 py-2 ml-auto text-white bg-pink-500 border-0 rounded focus:outline-none hover:bg-pink-600">
                                    Add To Cart
                                </button>
                                <button

                                    class="inline-flex items-center justify-center w-10 h-10 p-0 ml-4 text-gray-500 bg-gray-200 border-0 rounded-full">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                         stroke-width="2"
                                         class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </AppLayout>

</template>

<script>
import AppLayout from '../templates/AppTemplate'

export default {

    components: {
        AppLayout
    },
    props: ['item'],
    methods: {
        add(id) {
            console.log(id)
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
    },
};
</script>
