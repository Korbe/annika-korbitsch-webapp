<template>
    <AppLayout :title="form.id ? 'Schmuck bearbeiten' : 'Neuen Schmuck anlegen'">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ form.id ? 'Schmuck bearbeiten' : 'Schmuck hochladen' }}
            </h2>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                {{ form.id ? 'Bearbeite Schmuck' : 'Lade aktuellen Schmuck hoch.' }}
            </p>
        </template>

        <div class="py-12">
            <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <form class="space-y-10 divide-y divide-gray-200 sm:space-y-5" @submit.prevent="save">
                        <div class="p-4">
                            <div>
                                <div class="space-y-8 sm:space-y-5">
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                                        <v-input id="title" v-model="form.title" :error="form.errors.title"
                                            label="Titel" />
                                    </div>

                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                                        <v-input id="link" v-model="form.link" :error="form.errors.link"
                                            label="Link" />
                                    </div>


                                    <!-- Titelbild -->
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                            Bild</label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <!-- Bildvorschau -->
                                            <img v-if="image_preview" :src="image_preview"
                                                class="mb-2 w-32 h-32 object-cover rounded border" />

                                            <file-input id="image" @change="previewTitleImage" accept="image/*"
                                                class="max-w-lg block w-full focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm"
                                                name="image" type="file" />
                                            <jet-input-error :message="form.errors.image" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-200 bg-opacity-25 flex flex-row-reverse">
                            <div class="p-6">
                                <jet-button>{{ form.id ? 'Aktualisieren' : 'Hochladen' }}</jet-button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import { ref } from "vue";
import { router, useForm } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import JetInputError from "@/Jetstream/InputError.vue";
import JetButton from "@/Jetstream/Button.vue";
import FileInput from "@/Shared/FileInput.vue";
import VInput from "@/Shared/VInput.vue";

const props = defineProps({
    jewelry: Object,
});

const form = useForm({
    id: props.jewelry?.id || null,
    title: props.jewelry?.title || '',
    link: props.jewelry?.link || '',
    image: null,
});

// Bild-Vorschau
const image_preview = ref(props.jewelry?.media[0]?.original_url || null);

// Funktion, um eine Bildvorschau anzuzeigen
const previewTitleImage = (event) => {
    const file = event.target.files[0];
    if (file) {
        image_preview.value = URL.createObjectURL(file);
        form.image = file;
    }
};

const save = () => {
    // Wenn eine ID vorhanden ist, ein PUT-Request senden
    if (form.id)
        router.post(route('dashboard.jewelry.update', form.id), { _method: 'put', ...form })
    else
        form.post(route("dashboard.jewelry.store"))
};
</script>
