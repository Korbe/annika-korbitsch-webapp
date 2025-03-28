<template>
    <AppLayout title="Schmuck">
        <template #header>
            <div class="flex items-center">
                <h2 class="flex-1 font-semibold text-xl text-gray-800 leading-tight">
                    Schmuck
                </h2>
                <Link :href="route('dashboard.jewelry.create')"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                Schmuck hochladen</Link>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="flex flex-col">

                    <div class="overflow-x-auto bg-white sm:rounded-md">
                        <div class="align-middle inline-block min-w-full">
                            <div class="shadow overflow-hidden border-b border-gray-200">

                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-white py-10">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                                Titel</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                                Link</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                                Titelbild</th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Bearbeiten</span>
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Löschen</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr v-for="(item, index) in jewelries" :key="item.id"
                                            :class="index % 2 === 0 ? '' : 'bg-gray-50'">

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 truncate w-64">
                                                        <span class="text-gray-800">{{ item.title }}</span>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 truncate w-64">
                                                        <span class="text-gray-800">{{ item.link }}</span>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <img loading="lazy" class="rounded w-32 h-32 object-cover"
                                                        :src="item.media[0].original_url" />
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium ">
                                                <Link :href="route('dashboard.jewelry.edit', item.id)" tag="button">
                                                <ArrowPathIcon
                                                    class="h-5 w-5 text-brand-primary-600 hover:text-brand-primary-900" />
                                                </Link>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <button @click="deleteItem(item.id)"
                                                    class="flex :text-brand-primary-900">
                                                    <TrashIcon
                                                        class="h-5 w-5 text-gray-700 hover:text-brand-primary-900" />
                                                </button>
                                            </td>
                                        </tr>
                                        <tr v-if="jewelries.length === 0">
                                            <td colspan="5"
                                                class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                Kein Schmuck angelegt
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { TrashIcon } from '@heroicons/vue/24/solid'
import { router } from '@inertiajs/vue3'
import { ArrowPathIcon } from "@heroicons/vue/24/outline";

const props = defineProps({
    jewelries: Array,
});

const deleteItem = (id) => {
    router.delete(route('dashboard.jewelry.destroy', id))
}
</script>
