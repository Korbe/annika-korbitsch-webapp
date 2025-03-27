<template>
    <PublicLayout>
        <div class="bg-gradient-to-b from-gray-50 to-white">
            <div class="mx-auto max-w-5xl">

                <div class="max-w-6xl mx-auto px-4 sm:px-6">
                    <div class="py-12 md:pt-32">

                        <!-- Section header -->
                        <div class="pb-12 md:pb-14">
                            <div class="relative text-center md:text-left">
                                <h2 class="h2 font-cabinet-grotesk">Meine Werke</h2>
                            </div>
                        </div>

                        <!-- Content -->
                        <div>

                            <!-- Gallery -->
                            <div class="relative">

                                <!-- Images grid -->
                                <div class="max-w-sm mx-auto sm:max-w-none grid gap-6 sm:grid-cols-2 md:grid-cols-3 items-start"
                                    data-aos-id-inpspiration>


                                    <div @click="openLightbox(index)" v-for="(item, index) in inspirations" :key="index"
                                        class="cursor-pointer relative group hover:shadow-xl transition duration-150 ease-in-out"
                                        href="#0" data-aos="fade-down" data-aos-anchor="[data-aos-id-inpspiration]">
                                        <img class="w-full aspect-square object-cover" :src="item.image" width="352"
                                            height="352" :alt="item.name" />
                                        <!-- Content on hover -->
                                        <div
                                            class="md:hidden md:group-hover:block absolute bottom-0 left-0 right-0 p-4">
                                            <!-- Backdrop -->
                                            <div class="absolute inset-0 -mt-4 bg-gradient-to-t from-gray-800 to-transparent opacity-80 pointer-events-none"
                                                aria-hidden="true"></div>
                                            <!-- Content -->
                                            <div class="relative flex justify-between">
                                                <!-- Left side -->
                                                <div class="flex items-center">
                                                    <div class="truncate">
                                                        <div class="font-bold text-white truncate">{{ item.name }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <vue-easy-lightbox v-if="isLightboxOpen" :visible="isLightboxOpen"
                                :imgs="inspirations.map(item => item.image)" :index="currentImageIndex"
                                @hide="closeLightbox" />
                        </div>
                    </div>
                </div>
            </div>

            <ContactCta />
        </div>
    </PublicLayout>
</template>

<script setup>
import ContactCta from '@/Components/ContactCta.vue';
import PublicLayout from '@/Layouts/Public/PublicLayout.vue';
import { ref } from 'vue';
import VueEasyLightbox from 'vue-easy-lightbox';

const isLightboxOpen = ref(false);
const currentImageIndex = ref(0);

const inspirations = ref([
    { image: '/images/latest/inspiration-01.jpg', name: 'Inspiration 01' },
    { image: '/images/latest/inspiration-02.jpg', name: 'Inspiration 02' },
    { image: '/images/latest/inspiration-03.jpg', name: 'Inspiration 03' },
    { image: '/images/latest/inspiration-04.jpg', name: 'Inspiration 04' },
    { image: '/images/latest/inspiration-05.jpg', name: 'Inspiration 05' },
    { image: '/images/latest/inspiration-06.jpg', name: 'Inspiration 06' },
    { image: '/images/latest/inspiration-04.jpg', name: 'Inspiration 04' },
    { image: '/images/latest/inspiration-05.jpg', name: 'Inspiration 05' },
    { image: '/images/latest/inspiration-06.jpg', name: 'Inspiration 06' }
]);

const openLightbox = (index) => {
    currentImageIndex.value = index;
    isLightboxOpen.value = true;
};

// Methode zum Schließen der Lightbox
const closeLightbox = () => {
    isLightboxOpen.value = false;
};

</script>
