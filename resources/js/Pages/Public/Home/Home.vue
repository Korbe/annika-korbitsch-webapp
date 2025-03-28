<template>
    <PublicLayout title="Home">
        <Hero />
        <LatestArt />
        <JewelryCarousel />
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
import Testimonial from '../About/partials/Testimonial.vue';
import Faqs from './Partials/Faqs.vue';
import ContactCta from '@/Components/ContactCta.vue';
import Inspiration from './Partials/Inspiration.vue';

</script>