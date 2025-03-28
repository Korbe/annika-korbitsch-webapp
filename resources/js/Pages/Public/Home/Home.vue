<template>
    <PublicLayout title="Home">
        <Hero />
        <LatestArt :galleries="galleries" />
        <JewelryCarousel :jewelries="jewelries" />
        <Inspiration />
        <Faqs />
        <ContactCta />
    </PublicLayout>
</template>
<script setup>
import PublicLayout from '@/Layouts/Public/PublicLayout.vue';
import Hero from './Partials/Hero.vue';
import LatestArt from './Partials/LatestArt.vue';
import JewelryCarousel from './Partials/JewelryCarousel.vue';
import Faqs from './Partials/Faqs.vue';
import ContactCta from '@/Components/ContactCta.vue';
import Inspiration from './Partials/Inspiration.vue';

defineProps({
    galleries: Array,
    jewelries: Array
});

</script>