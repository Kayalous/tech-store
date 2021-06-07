<template>
    <AppLayout>

        <div class="">
            <div class="flex flex-row px-10 align-middle bg-pink-500 md:px-64 md:py-10 overflow-clip">
                <div class="flex flex-col md:flex-row justify-self-start">

                    <div class="flex flex-row p-10 md:flex-row">
                        <img src="/assets/iphone.png" class="w-1/2 md:w-1/3 md:mt-12 " alt="">
                        <div class="flex flex-col flex-wrap justify-center align-middle md:w-1/4 ">
                            <button
                                class="w-3/4 p-2 mb-6 font-semibold text-gray-200 bg-white rounded-md md:px-2 md:py-2 focus:outline-none md:w-1/2 md:justify-center"
                                id="buttoner">Shop Now
                            </button>
                            <!-- <vue-typer text='Hello World! I was registered globally!'></vue-typer> -->

                            <p class="flex-wrap font-medium text-white">Lorem ipsum dolor sit amet, In nulla posuere
                                sollicitudin
                                aliquam ultrices
                                sagittis orci a scelerisque.</p>
                            <div class="flex flex-row w-1/2 mt-6 md:"><img class="cursor-pointer"
                                                                           href="https://www.apple.com/eg/app-store/"
                                                                           src="/assets/icon_App Store [inverse].png"
                                                                           alt=""> <img
                                href="https://www.apple.com/eg/app-store/" class="cursor-pointer"
                                src="/assets/icon_Google Play (monochrome) [inverse].png" alt=""></div>
                        </div>


                    </div>


                    <div
                        class="content-center self-center justify-end w-full my-auto text-3xl text-center text-white align-middle items- center">

                        <p>THE FUTURE IS
                            <vue-typer
                                :text='["HERE ","NOW ","READY ",""]'
                                :repeat='Infinity'
                                :shuffle='true'
                                initial-action='typing'
                                :pre-type-delay='70'
                                :type-delay='70'
                                :pre-erase-delay='2000'
                                :erase-delay='250'
                                erase-style='backspace'
                                :erase-on-complete='true'
                                caret-animation='smooth'
                            ></vue-typer>
                        </p>
                    </div>

                </div>


            </div>

            <h1 class="flex justify-center mx-auto mt-10 text-4xl md:text-6xl"> <span
                class="font-semibold text-black"><span
                class="font-semibold text-pink-500 ">PAYMENT</span> PLANS</span></h1>

            <section>
                <div class="container max-w-full px-6 py-24 mx-auto">


                    <div class="max-w-full mx-auto my-3 md:max-w-6xl md:px-8">
                        <div class="relative flex flex-col items-center block md:flex-row">
                            <div
                                class="relative z-0 w-11/12 max-w-sm my-8 rounded-lg shadow-lg sm:w-3/5 lg:w-1/3 sm:my-5 md:-mr-4">
                                <div class="overflow-hidden text-black bg-white rounded-lg shadow-lg shadow-inner">
                                    <div
                                        class="block max-w-sm px-8 mx-auto mt-2 text-sm text-left text-black sm:text-md lg:px-6">
                                        <h1 class="p-3 pb-0 text-lg font-medium tracking-wide text-center uppercase">
                                            Laptop Deals
                                        </h1>
                                        <h2 class="pb-6 text-sm text-center text-gray-500">Starting from $300</h2>

                                        Maintain your portability and productivity with our collection of top of the
                                        line
                                        laptops
                                    </div>

                                    <div class="flex flex-wrap px-6 mt-3">
                                        <ul>
                                            <li class="flex items-center">
                                                <div class="p-2 text-green-700 rounded-full fill-current ">
                                                    <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round">
                                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                    </svg>
                                                </div>
                                                <span class="ml-3 text-lg text-gray-700">Free Shipping</span>
                                            </li>
                                            <li class="flex items-center">
                                                <div class="p-2 text-green-700 rounded-full fill-current ">
                                                    <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round">
                                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                    </svg>
                                                </div>
                                                <span class="ml-3 text-lg text-gray-700">Free Setup</span>
                                            </li>
                                            <li class="flex items-center">
                                                <div class="p-2 text-green-700 rounded-full fill-current ">
                                                    <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round">
                                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                    </svg>
                                                </div>
                                                <span class="ml-3 text-lg text-gray-700">No Interest Installments</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flex items-center block p-8 uppercase">
                                        <button
                                            class="block w-full px-6 py-3 mt-3 text-lg font-semibold text-white bg-pink-500 rounded-lg shadow-xl hover:bg-pink-700">
                                            Select
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="relative z-10 w-full max-w-md my-8 bg-white rounded-lg shadow-lg sm:w-2/3 lg:w-1/3 sm:my-5">
                                <div
                                    class="py-4 text-sm font-semibold leading-none tracking-wide text-center text-white uppercase bg-pink-500 rounded-t-lg">
                                    Most Popular
                                </div>
                                <div
                                    class="block max-w-sm px-8 mx-auto mt-2 text-sm text-left text-black sm:text-md lg:px-6">
                                    <h1 class="p-3 pb-0 text-lg font-medium tracking-wide text-center uppercase">
                                        Phones
                                    </h1>
                                    <h2 class="pb-6 text-sm text-center text-gray-500"><span class="text-xl">Starting from $19/mo</span>
                                    </h2>

                                    A collection of our phones in mint condition to fit all price brackets
                                </div>
                                <div class="flex justify-start pl-12 mt-3 sm:justify-start">
                                    <ul>
                                        <li class="flex items-center">
                                            <div class="p-2 text-green-700 rounded-full fill-current">
                                                <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                     viewBox="0 0 24 24"
                                                     fill="none"
                                                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                </svg>
                                            </div>
                                            <span class="ml-3 text-lg text-gray-700">Free Shipping</span>
                                        </li>
                                        <li class="flex items-center">
                                            <div class="p-2 text-green-700 rounded-full fill-current ">
                                                <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                     viewBox="0 0 24 24"
                                                     fill="none"
                                                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                </svg>
                                            </div>
                                            <span class="ml-3 text-lg text-gray-700">1 year warranty</span>
                                        </li>
                                        <li class="flex items-center">
                                            <div class="p-2 text-green-700 rounded-full fill-current ">
                                                <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                     viewBox="0 0 24 24"
                                                     fill="none"
                                                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                </svg>
                                            </div>
                                            <span class="ml-3 text-lg text-gray-700">No Interest Installments</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="flex items-center block p-8 uppercase">
                                    <button
                                        class="block w-full px-6 py-3 mt-3 text-lg font-semibold text-white bg-pink-500 rounded-lg shadow-xl hover:bg-pink-700">
                                        Select
                                    </button>
                                </div>
                            </div>
                            <div
                                class="relative z-0 w-11/12 max-w-sm my-8 rounded-lg shadow-lg sm:w-3/5 lg:w-1/3 sm:my-5 md:-ml-4">
                                <div class="overflow-hidden text-black bg-white rounded-lg shadow-lg shadow-inner">
                                    <div
                                        class="block max-w-sm px-8 mx-auto mt-2 text-sm text-left text-black sm:text-md lg:px-6">
                                        <h1 class="p-3 pb-0 text-lg font-medium tracking-wide text-center uppercase">
                                            Tablets
                                        </h1>
                                        <h2 class="pb-6 text-sm text-center text-gray-500">Starting from $9 /mo</h2>

                                        Everything from drawing tablets to Kindles to regular use tablets
                                    </div>
                                    <div class="flex flex-wrap px-6 mt-3">
                                        <ul>
                                            <li class="flex items-center">
                                                <div class="p-2 text-green-700 rounded-full fill-current ">
                                                    <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round">
                                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                    </svg>
                                                </div>
                                                <span class="ml-3 text-lg text-gray-700">Variety</span>
                                            </li>
                                            <li class="flex items-center">
                                                <div class="p-2 text-green-700 rounded-full fill-current ">
                                                    <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round">
                                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                    </svg>
                                                </div>
                                                <span class="ml-3 text-lg text-gray-700">Free Shipping</span>
                                            </li>
                                            <li class="flex items-center">
                                                <div class="p-2 text-green-700 rounded-full fill-current ">
                                                    <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round">
                                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                    </svg>
                                                </div>
                                                <span class="ml-3 text-lg text-gray-700">2-Year Warranty</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="flex items-center block p-8 uppercase">
                                        <button
                                            class="block w-full px-6 py-3 mt-3 text-lg font-semibold text-white bg-pink-500 rounded-lg shadow-xl hover:bg-pink-700">
                                            Select
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="phone.png" alt="">
                </div>
            </section>


            <div id="section-three" class="md:w-full ">
                <div
                    class="flex flex-col justify-center object-cover w-full overflow-hidden md:flex-row justify-items-center ">
                    <div class="w-1/3 w-full overflow-hidden text-center imger max-w-1/3 p-60 md:cursor-pointer">
                    <span
                        class="text-2xl font-semibold text-white labels md:text-4xl drop-shadow-lg md:text-center md:align-middle">Laptops</span>

                    </div>
                    <div class="w-1/3 w-full overflow-hidden text-center imger1 max-w-1/3 p-60 md:cursor-pointer">
                    <span
                        class="text-2xl font-semibold text-white labels md:text-4xl drop-shadow-lg md:text-center md:align-middle">Phones</span>
                    </div>
                    <div class="w-1/3 w-full overflow-hidden text-center imger2 p-60 md:cursor-pointer">
                    <span
                        class="text-2xl font-semibold text-white labels md:text-4xl drop-shadow-lg md:text-center md:align-middle">Accessories</span>
                    </div>
                    <!-- <img class= "w-1/3"src="assets/19791.jpg" alt="">
                    <img class= "w-1/3"src="assets/19791.jpg" alt="">
                    <img class= "w-1/3"src="assets/19791.jpg" alt=""> -->


                </div>
            </div>


            <div id="flash-sales" class="my-14">

                <h1 class="text-6xl text-center dealer"> Flash <span class="text-pink-500 dealer"> Sales</span></h1>

                <div class="flex flex-col md:flex-row justify-center md\:justify-evenly">
                    <div class="container w-full max-w-sm p-4 mx-auto md:mx-0 sm:w-1/2">
                        <div class="flex flex-col justify-center p-10 bg-white rounded-lg shadow-2xl">
                            <div>
                                <p class="text-2xl font-bold text-center text-gray-900 uppercase md:text-left">Iphone 12
                                    MINI</p>
                                <p class="text-sm text-center text-gray-400 uppercase md:text-left">Lorem ipsum dolor
                                    sit
                                    amet</p>
                            </div>
                            <div>
                                <img id="sale-1" class="max-w-1/2"
                                     src="https://tradelinestores.s3.amazonaws.com/media/product_images/efd94ad1-35f6-4683-a599-d038d700d7fc.jpg"
                                     alt="">
                            </div>
                            <div class="colours">
                                <ul class="flex flex-row justify-center ">
                                    <li class="mr-4 last:mr-0">
                                        <a href="#red"
                                           onclick="document.getElementById('sale-1').src = 'https://tradelinestores.s3.amazonaws.com/media/product_images/efd94ad1-35f6-4683-a599-d038d700d7fc.jpg'"
                                           class="block w-6 h-6 bg-red-600 rounded-full focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:bg-red-700 hover:bg-red-800"></a>
                                    </li>
                                    <li class="mr-4 last:mr-0">
                                        <a href="#blue"
                                           onclick="document.getElementById('sale-1').src = 'https://tradelinestores.s3.amazonaws.com/media/product_images/fd2bb5d4-073f-4ea2-a951-3714e0aa443b.jpg'"
                                           class="block w-6 h-6 bg-blue-600 rounded-full focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:bg-blue-700 hover:bg-blue-800"></a>
                                    </li>
                                    <li class="mr-4 last:mr-0">
                                        <a href="#blue"
                                           onclick="document.getElementById('sale-1').src = 'https://tradelinestores.s3.amazonaws.com/media/product_images/f183313a-9cf3-468f-8a74-ab4825835913.jpg'"
                                           class="block w-6 h-6 bg-gray-100 rounded-full focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:bg-gray-300 hover:bg-gray-300"></a>
                                    </li>
                                    <li class="mr-4 last:mr-0">
                                        <a href="#blue"
                                           onclick="document.getElementById('sale-1').src = 'https://tradelinestores.s3.amazonaws.com/media/product_images/8336d5d7-1756-4873-b1aa-761d8b31f8a2.jpg'"
                                           class="block w-6 h-6 bg-black rounded-full focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 hover:bg-gray-800"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-10 info-stores">
                                <div class="flex flex-col items-center justify-between text-gray-700 md:flex-row">
                                    <p class="text-xl font-bold"><span
                                        class="font-medium text-gray-400 line-through">$700</span> $500 </p>
                                    <button
                                        class="px-6 py-2 uppercase transition duration-200 ease-in border-2 border-gray-900 rounded-full hover:bg-gray-800 hover:text-white focus:outline-none">
                                        Add
                                        to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container w-full max-w-sm p-4 mx-auto md:mx-0 sm:w-1/2">
                        <div class="flex flex-col justify-center p-10 bg-white rounded-lg shadow-2xl">
                            <div>
                                <p class="text-2xl font-bold text-center text-gray-900 uppercase md:text-left">iPAD
                                    AIR</p>
                                <p class="text-sm text-center text-gray-400 uppercase md:text-left">Lorem ipsum dolor
                                    sit
                                    amet</p>
                            </div>
                            <div>
                                <img id="sale-2" class="w-3/4 mx-auto mb-4 max-w-1/2"
                                     src="https://tradelinestores.s3.amazonaws.com/media/product_images/f33fb2f9-fcff-492b-8eaf-feba5047f9a8.png"
                                     alt="">
                            </div>
                            <div class="colours">
                                <ul class="flex flex-row justify-center ">
                                    <li class="mr-4 last:mr-0">
                                        <a href="#red"
                                           onclick="document.getElementById('sale-2').src = 'https://tradelinestores.s3.amazonaws.com/media/product_images/f33fb2f9-fcff-492b-8eaf-feba5047f9a8.png'"
                                           class="block w-6 h-6 bg-pink-300 rounded-full focus:ring-2 focus:ring-pink-400 focus:ring-offset-2 focus:bg-pink-400 hover:bg-pink-400"></a>
                                    </li>
                                    <li class="mr-4 last:mr-0">
                                        <a href="#blue"
                                           onclick="document.getElementById('sale-2').src = 'https://tradelinestores.s3.amazonaws.com/media/product_images/4e9ee796-58da-4e56-9b23-d96f97b1b95e.png'"
                                           class="block w-6 h-6 bg-green-300 rounded-full focus:ring-2 focus:ring-green-400 focus:ring-offset-2 focus:bg-green-500 hover:bg-green-400"></a>
                                    </li>
                                    <li class="mr-4 last:mr-0">
                                        <a href="#blue"
                                           onclick="document.getElementById('sale-2').src = 'https://tradelinestores.s3.amazonaws.com/media/product_images/5b487b3f-d184-4e9e-b642-f89af7ea5711.png'"
                                           class="block w-6 h-6 bg-gray-100 rounded-full focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:bg-gray-300 hover:bg-gray-300"></a>
                                    </li>
                                    <li class="mr-4 last:mr-0">
                                        <a href="#blue"
                                           onclick="document.getElementById('sale-2').src = 'https://tradelinestores.s3.amazonaws.com/media/product_images/7f9a85ad-a755-4e59-9f84-4e6642e6753c.png'"
                                           class="block w-6 h-6 bg-black rounded-full focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 hover:bg-gray-800"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-10 info-stores">
                                <div class="flex flex-col items-center justify-between text-gray-700 md:flex-row">
                                    <p class="text-xl font-bold"><span
                                        class="font-medium text-gray-400 line-through">$700</span> $500 </p>
                                    <button
                                        class="px-6 py-2 uppercase transition duration-200 ease-in border-2 border-gray-900 rounded-full hover:bg-gray-800 hover:text-white focus:outline-none">
                                        Add
                                        to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container w-full max-w-sm p-4 mx-auto md:mx-0 sm:w-1/2">
                        <div class="flex flex-col justify-center p-10 bg-white rounded-lg shadow-2xl">
                            <div>
                                <p class="text-2xl font-bold text-center text-gray-900 uppercase md:text-left">Macbook
                                    Air
                                    M1</p>
                                <p class="text-sm text-center text-gray-400 uppercase md:text-left">Lorem ipsum dolor
                                    sit
                                    amet</p>
                            </div>
                            <div>
                                <img id="sale-3"
                                     src="https://tradelinestores.s3.amazonaws.com/media/product_images/80df4526-ec11-4f12-9091-45b560454bc4.jpg"
                                     alt="">
                            </div>
                            <div class="colours">
                                <ul class="flex flex-row justify-center ">
                                    <li class="mr-4 last:mr-0">
                                        <a href="#red"
                                           onclick="document.getElementById('sale-3').src = 'https://tradelinestores.s3.amazonaws.com/media/product_images/80df4526-ec11-4f12-9091-45b560454bc4.jpg'"
                                           class="block w-6 h-6 bg-yellow-200 rounded-full focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:bg-yellow-500 hover:bg-yellow-400"></a>
                                    </li>
                                    <li class="mr-4 last:mr-0">
                                        <a href="#blue"
                                           onclick="document.getElementById('sale-3').src = 'https://tradelinestores.s3.amazonaws.com/media/product_images/357aa049-7f90-47b5-83d5-9d76766a15be.jpg'"
                                           class="block w-6 h-6 bg-gray-100 rounded-full focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:bg-gray-200 hover:bg-gray-300"></a>
                                    </li>
                                    <li class="mr-4 last:mr-0">
                                        <a href="#blue"
                                           onclick="document.getElementById('sale-3').src = 'https://tradelinestores.s3.amazonaws.com/media/product_images/40f36622-ef43-420b-b8ec-98f13a9f4c2b.jpg'"
                                           class="block w-6 h-6 bg-gray-400 rounded-full focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:bg-gray-700 hover:bg-gray-700"></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="mt-10 info-stores">
                                <div class="flex flex-col items-center justify-between text-gray-700 md:flex-row">
                                    <p class="text-xl font-bold"><span
                                        class="font-medium text-gray-400 line-through">$700</span> $500 </p>
                                    <a href="/product">
                                        <button
                                            class="px-6 py-2 uppercase transition duration-200 ease-in border-2 border-gray-900 rounded-full hover:bg-gray-800 hover:text-white focus:outline-none">
                                            Add
                                            to cart
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </AppLayout>

</template>

<script>
import AppLayout from '../templates/AppTemplate'

export default {
    components: {
        AppLayout
    },
    data: () =>
        ({
            test: [
                {tester: 'Test1'},
                {tester: 'Test2'},
                {tester: 'Test3'}
            ]
        })
}

</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Yellowtail&display=swap');

* {
    font-family: 'Open Sans', sans-serif;
}

html {
    scroll-behavior: smooth;

}

@keyframes rocking {
    0%, 100% {
        transform: rotateZ(-10deg);
    }
    50% {
        transform: rotateZ(10deg);
    }
}

.vue-typer {

}

.vue-typer .custom.char.typed {
    color: #96103d;
}

.vue-typer .custom.char.selected {
    color: #E91E63;
}

.vue-typer .custom.caret {
    animation: rocking 1s ease-in-out 0s infinite;
}

.vue-typer .custom.caret.typing {
    background-color: #96103d;
}

.vue-typer .custom.caret.selecting {
    display: inline-block;
    background-color: #E91E63;
}

#app {
    font-family: 'Roboto', sans-serif;
}

@keyframes float {
    0% {

        transform: translatey(0px);
    }
    50% {

        transform: translatey(-20px);
    }
    100% {

        transform: translatey(0px);
    }
}

hr {
    height: 2px;
    background: radial-gradient(circle, rgba(233, 71, 153, 1) 0%, rgba(253, 235, 244, 1) 77%, rgba(255, 255, 255, 1) 100%);
    width: 60%;

}

#phone {
    transform: translatey(0px);
    animation: float 6s ease-in-out infinite;
    max-height: 60vh;
    display: flex;
    float: inline-end;
}

svg {
}

.header-div {
    display: flex;
    justify-content: space-around;
}

.header-buttons {
    display: flex;
    justify-content: center;
    align-items: center;
}

.head-content {
    margin-top: 15%;
    display: inline-block;
    justify-content: center;
    align-items: center;
}

header {
    background: #f25287;
    background-size: 400% 400%;
    /* padding: 1rem; */
    -webkit-animation: AnimationName 9s ease infinite;
    -moz-animation: AnimationName 9s ease infinite;
    animation: AnimationName 9s ease infinite;

}

@-webkit-keyframes AnimationName {
    0% {
        background-position: 0% 50%
    }
    50% {
        background-position: 100% 50%
    }
    100% {
        background-position: 0% 50%
    }
}

@-moz-keyframes AnimationName {
    0% {
        background-position: 0% 50%
    }
    50% {
        background-position: 100% 50%
    }
    100% {
        background-position: 0% 50%
    }
}

@keyframes AnimationName {
    0% {
        background-position: 0% 50%
    }
    50% {
        background-position: 100% 50%
    }
    100% {
        background-position: 0% 50%
    }
}

.navbar-brand {
    max-width: 5%;
}

.navbar {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 5rem;
}


.container {
    display: flex;
    justify-content: space-around;
}

.nav-content {
    margin-left: 25rem;
    display: flex;
    justify-content: space-around;
}


.dealer {
    font-family: 'Yellowtail', cursive;

}


#title {
    width: 100%;
    position: absolute;
    padding: 0px;
    margin: 0px auto;
    text-align: center;
    font-size: 27px;
    color: rgba(255, 255, 255, 1);
    font-family: 'Open Sans', sans-serif;
    z-index: 9999;
    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), -1px 0px 2px rgba(255, 255, 255, 0);
}


#buttoner {
    color: #f25287;
}

.progress-container {
    width: 100%;
    height: 6px;
    background: #fff;
}

/* The progress bar (scroll indicator) */
.progress-bar {
    height: 6px;
    background: #EF5288;
    width: 0%;
}

.imger {
    background-origin: padding-box;

    background: linear-gradient(
        rgba(255, 0, 128, 0.65),
        rgba(255, 0, 221, 0.35)
    ),
    url(https://tradelinestores.s3.amazonaws.com/media/product_images/80df4526-ec11-4f12-9091-45b560454bc4.jpg);
    background-position: center;
    background-size: contain;
    background-repeat: no-repeat;
    height: 500px;
}


.imger1 {
    background-origin: padding-box;

    background: linear-gradient(
        rgba(8, 141, 230, 0.65),
        rgba(71, 170, 250, 0.35)
    ),
    url(https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Hand_Gesture_-_Holding_a_Phone_Vector.svg/1200px-Hand_Gesture_-_Holding_a_Phone_Vector.svg.png
    );
    background-position: center;
    background-size: contain;
    background-repeat: no-repeat;
    height: 500px;
}


.imger2 {
    background-origin: padding-box;

    background: linear-gradient(
        rgba(255, 0, 0, 0.65),
        rgba(255, 0, 0, 0.35)
    ),
    url(https://img.freepik.com/free-vector/usb-micro-cable-illustration-realistic-3d-isolated-white-black-connector_33099-589.jpg?size=626&ext=jpg
    );
    background-position: center;
    background-size: contain;
    background-repeat: no-repeat;
    height: 500px;
}


@media only screen and (max-width: 500px) {
    .imger1 {
        position: relative;
        background: linear-gradient(
            rgba(8, 141, 230, 0.65),
            rgba(71, 170, 250, 0.35)
        ),
        url(https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Hand_Gesture_-_Holding_a_Phone_Vector.svg/1200px-Hand_Gesture_-_Holding_a_Phone_Vector.svg.png
        );
        background-size: 90%;
        background-repeat: no-repeat;
        background-position-y: center;

    }


    .imger2 {
        position: relative;
        background: linear-gradient(
            rgba(255, 0, 0, 0.65),
            rgba(255, 0, 0, 0.35)
        ),
        url(https://img.freepik.com/free-vector/usb-micro-cable-illustration-realistic-3d-isolated-white-black-connector_33099-589.jpg?size=626&ext=jpg
        );
        background-size: 90%;
        background-repeat: no-repeat;
        background-position-y: center;
        text-align: center;


    }

    .imger {
        position: relative;
        background: linear-gradient(
            rgba(255, 0, 128, 0.65),
            rgba(255, 0, 221, 0.35)
        ),
        url(https://tradelinestores.s3.amazonaws.com/media/product_images/80df4526-ec11-4f12-9091-45b560454bc4.jpg);
        /* background-position: center; */
        background-size: 90%;
        background-repeat: no-repeat;
        height: 500px;
        background-position-y: center;

    }

    .labels {
        position: absolute;
        color: #FFF;
        top: 50%;
        left: 35%;
        text-align: left;

    }
}


input:checked ~ .dot {
    transform: translateX(100%);
    background-color: #000000;
}
</style>
