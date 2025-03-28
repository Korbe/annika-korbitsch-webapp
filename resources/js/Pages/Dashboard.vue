<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="p-5 bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <p class="text-center text-2xl">Hier hast du 2 Möglichkeiten.</p>

                    <div class="flex flex-col md:flex-row space-x-5 p-5">
                        <a :href="route('dashboard.gallery.index')" class="h-50 w-96 rounded-lg flex flex-col justify-center items-center text-center bg-gray-100 border border-gray-300">
                            <span class="text-2xl font-bold">Galerie</span>
                            <span>Bilder hochladen</span>
                        </a>
                        <a :href="route('dashboard.jewelry.index')" class="h-50 w-96 rounded-lg flex flex-col justify-center items-center text-center bg-gray-100 border border-gray-300">
                            <span class="text-2xl font-bold">Schmuck</span>
                            <span>Schmuck hochladen</span>
                        </a>
                    </div>





                </div>
            </div>
        </div>
    </AppLayout>
</template>
