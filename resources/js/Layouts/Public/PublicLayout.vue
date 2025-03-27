<template>

    <Head :title="title" />

    <CookieBanner />

    <div className="flex flex-col min-h-screen overflow-hidden">

        <PublicHeader />

        <main class="grow">
            <slot></slot>
        </main>

        <PublicFooter />

    </div>
</template>
<script setup>
import { Head } from '@inertiajs/vue3';
import PublicFooter from './PublicFooter.vue';
import PublicHeader from './PublicHeader.vue';
import CookieBanner from '@/Components/CookieBanner.vue';

defineProps({
    title: String,
});

</script>