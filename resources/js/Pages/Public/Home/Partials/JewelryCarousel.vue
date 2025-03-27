<template>
    <section class="bg-gray-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20">
                <!-- Section header -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                    <h2 class="h2 font-cabinet-grotesk text-gray-100">Mein Schmuck auf <a href="https://www.cuirma.at/" class="underline">CuirMa.at</a></h2>
                </div>

                <!-- Swiper Carousel -->
                <div class="carousel swiper-container max-w-sm mx-auto sm:max-w-none">
                    <div class="swiper-wrapper">
                        <div v-for="(item, index) in carouselItems" :key="index"
                            class="swiper-slide h-auto flex flex-col">
                            <!-- Image -->
                            <img class="w-full aspect-4/3 object-cover" :src="item.image" :alt="item.title" />

                            <!-- White box -->
                            <div class="grow bg-white px-4 pb-6">
                                <!-- Title -->
                                <a class="inline-block font-cabinet-grotesk font-bold text-xl decoration-blue-500 decoration-2 underline-offset-2 hover:underline"
                                    href="#0">
                                    {{ item.title }}
                                </a>
                                <div class="text-sm text-gray-500 italic">{{ item.collections }} collections</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <div class="flex mt-12 space-x-4 justify-end">
                    <button
                        class="carousel-prev relative z-20 w-14 h-14 rounded-full flex items-center justify-center group bg-gray-700 hover:bg-blue-500 transition duration-150 ease-in-out">
                        <span class="sr-only">Previous</span>
                        <svg class="w-4 h-4 fill-gray-400 group-hover:fill-white transition duration-150 ease-in-out"
                            viewBox="0 0 16 16">
                            <path d="M6.7 14.7l1.4-1.4L3.8 9H16V7H3.8l4.3-4.3-1.4-1.4L0 8z" />
                        </svg>
                    </button>
                    <button
                        class="carousel-next relative z-20 w-14 h-14 rounded-full flex items-center justify-center group bg-gray-700 hover:bg-blue-500 transition duration-150 ease-in-out">
                        <span class="sr-only">Next</span>
                        <svg class="w-4 h-4 fill-gray-400 group-hover:fill-white transition duration-150 ease-in-out"
                            viewBox="0 0 16 16">
                            <path d="M9.3 14.7l-1.4-1.4L12.2 9H0V7h12.2L7.9 2.7l1.4-1.4L16 8z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import Swiper, { Navigation } from 'swiper';
import 'swiper/css';

// Swiper-Module aktivieren
Swiper.use([Navigation]);

// Liste mit Carousel Items
const carouselItems = ref([
    {
        title: 'Digital Art',
        image: '/images/carousel/carousel-01.jpg',
        collections: 34,
    },
    {
        title: 'Gradients',
        image: '/images/carousel/carousel-02.jpg',
        collections: 129,
    },
    {
        title: 'Liquid 3D',
        image: '/images/carousel/carousel-03.jpg',
        collections: 49,
    },
    {
        title: 'Abstraction',
        image: '/images/carousel/carousel-04.jpg',
        collections: 24,
    },
    {
        title: 'Landscapes',
        image: '/images/carousel/carousel-05.jpg',
        collections: 27,
    },
    {
        title: 'Pastel',
        image: '/images/carousel/carousel-06.jpg',
        collections: 22,
    },
    {
        title: 'Dark 3D',
        image: '/images/carousel/carousel-07.jpg',
        collections: 112,
    },
    {
        title: 'Baroque',
        image: '/images/carousel/carousel-08.jpg',
        collections: 77,
    },
]);

// Swiper initialisieren
onMounted(() => {
    new Swiper('.carousel', {
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 4,
            },
        },
        grabCursor: true,
        loop: false,
        centeredSlides: false,
        initialSlide: 0,
        spaceBetween: 24,
        watchSlidesProgress: true,
        navigation: {
            nextEl: '.carousel-next',
            prevEl: '.carousel-prev',
        },
    });
});
</script>