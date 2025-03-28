<template>
    <section data-aos="fade-down" class="bg-[#202020]">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20">
                <!-- Section header -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                    <h2 class="h2 text-gray-100">Mein Schmuck auf <a href="https://www.cuirma.at/">CuirMa.at</a></h2>
                </div>

                <!-- Swiper Carousel -->
                <div class="carousel swiper-container max-w-sm mx-auto sm:max-w-none">
                    <div class="swiper-wrapper">
                        <a v-for="(item, index) in carouselItems" :key="index" :href="item.link" target="_blank"
                            class="swiper-slide h-auto flex flex-col transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-lg">

                            <!-- Image -->
                            <img class="w-full aspect-4/3 object-cover" :src="item.image" :alt="item.title" />

                            <!-- White box mit fester Höhe für Konsistenz -->
                            <div class="grow bg-white px-4 pb-6 flex flex-col">
                                <!-- Title mit fester Höhe -->
                                <h2 class="font-cabinet-grotesk font-bold text-xl min-h-[6rem] flex items-center"
                                    href="#0">
                                    {{ item.title }}
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <div class="flex mt-12 space-x-4 justify-end">
                    <button
                        class="carousel-prev relative z-20 w-14 h-14 rounded-full flex items-center justify-center group bg-brand hover:bg-gray-500 transition duration-150 ease-in-out">
                        <span class="sr-only">Previous</span>
                        <svg class="w-4 h-4 fill-gray-400 group-hover:fill-white transition duration-150 ease-in-out"
                            viewBox="0 0 16 16">
                            <path d="M6.7 14.7l1.4-1.4L3.8 9H16V7H3.8l4.3-4.3-1.4-1.4L0 8z" />
                        </svg>
                    </button>
                    <button
                        class="carousel-next relative z-20 w-14 h-14 rounded-full flex items-center justify-center group bg-brand hover:bg-gray-500 transition duration-150 ease-in-out">
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
        title: 'Kleine Achatkugel in Kupfer',
        image: '/images/jewelery/1.jpg',
        link: 'https://www.cuirma.at/steinschmuck/#cc-m-product-7170880813',
    },
    {
        title: 'Shiva Auge mit nachtleuchtender Einlage',
        image: '/images/jewelery/2.jpg',
        link: 'https://www.cuirma.at/steinschmuck/#cc-m-product-7170880813',
    },
    {
        title: 'Armband mit gepresster Pflanze',
        image: '/images/jewelery/3.jpg',
        link: 'https://www.cuirma.at/steinschmuck/#cc-m-product-7170880813',
    },
    {
        title: 'Armkettchen mit gepresster Pflanze',
        image: '/images/jewelery/4.jpg',
        link: 'https://www.cuirma.at/steinschmuck/#cc-m-product-7170880813',
    },
    {
        title: 'Brosche mit Pflanze',
        image: '/images/jewelery/5.jpg',
        link: 'https://www.cuirma.at/steinschmuck/#cc-m-product-7170880813',
    },
    {
        title: 'Schmuckset mit gepressten Pflanzen',
        image: '/images/jewelery/6.jpg',
        link: 'https://www.cuirma.at/steinschmuck/#cc-m-product-7170880813',
    },
    {
        title: 'Schmuckset mit Original Gemälde (Gradient blue)',
        image: '/images/jewelery/7.jpg',
        link: 'https://www.cuirma.at/steinschmuck/#cc-m-product-7170880813',
    },
    {
        title: 'Schmuckset Freiheit spüren',
        image: '/images/jewelery/8.jpg',
        link: 'https://www.cuirma.at/steinschmuck/#cc-m-product-7170880813',
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