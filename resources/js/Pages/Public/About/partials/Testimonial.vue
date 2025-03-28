<template>
    <section data-aos="fade-down" class="bg-[#202020] my-10">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-16">

                <div class="relative">

                    <!-- Gray box -->
                    

                    <!-- Content -->
                    <div class="relative px-6 pb-8 md:px-12 lg:pb-0">

                        <!-- * Custom styles in src/css/additional-styles/theme.scss -->
                        <div class="testimonial-carousel swiper-container">
                            <div class="swiper-wrapper">

                                <!-- Testimonial -->
                                <div v-for="(item, index) in testimonials" :key="index"
                                    class="swiper-slide space-y-8 lg:flex items-center lg:space-y-0 lg:space-x-8 text-center lg:text-left">
                                    <div class="shrink-0 relative inline-flex">
                                        <img class="rounded-lg" :src="item.image" width="280" height="280"
                                            alt="Testimonial 01" />
                                        <div class="absolute right-0 bottom-0 mr-4 mb-6">
                                            <a class="flex items-center font-bold px-3 py-1 bg-white rounded-lg shadow-xs"
                                                href="#0">
                                                <span>{{ item.author }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <h4 class="h3 text-white mb-4">{{ item.text }}</h4>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Bullets -->
                        <div class="mt-4 lg:absolute bottom-0 right-0 lg:mt-0 lg:mr-12 lg:mb-16 z-10">
                            <div class="testimonial-carousel-pagination text-center"></div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section>
</template>

<script setup>
import Swiper, { Pagination } from 'swiper'
import 'swiper/css'
import 'swiper/css/pagination'
import { onMounted, ref } from 'vue';
Swiper.use([Pagination])

onMounted(() => {
    const testimonial = new Swiper('.testimonial-carousel', {
        slidesPerView: 1,
        watchSlidesProgress: true,
        pagination: {
            el: '.testimonial-carousel-pagination',
            clickable: true
        },
    })
});

const testimonials = ref([
    {
        text: "Die Kunstwerke sind atemberaubend! Jedes Detail zeigt die Leidenschaft und das Talent. Ich bin so glücklich mit meinem personalisierten Gemälde!",
        author: "Max Mustermann",
        job: "CEO, Beispiel AG",
        image: "images/testimonials/testimonial-01.jpg",
    },
    {
        text: "Mit ihr zusammenzuarbeiten war eine inspirierende Erfahrung. Ihr kreativer Blick und ihr handwerkliches Können haben unser gemeinsames Projekt auf ein neues Level gehoben.",
        author: "Lisa Schmidt",
        job: "Marketing Manager, Firma XY",
        image: "images/testimonials/testimonial-02.jpg",
    },
    {
        text: "Ihre Werke haben eine Tiefe und Ausdruckskraft, die mich immer wieder fasziniert. Eine wahre Bereicherung für die Kunstszene!",
        author: "Tom Müller",
        job: "Entwickler, TechCorp",
        image: "images/testimonials/testimonial-03.jpg",
    },
]);

</script>
<style scoped>
.swiper-pagination-bullet-active {
    background: red !important;
}
</style>