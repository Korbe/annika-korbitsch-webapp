<template>
    <div class="border border-gray-300 rounded-md shadow-sm p-2">
        <input ref="fileRef" :accept="accept" class="hidden" type="file" @change="change">
        
        <div v-if="!modelValue">
            <button class="flex px-4 p-2 bg-gray-800 hover:bg-gray-700 rounded-md font-semibold text-xs text-white uppercase" type="button" @click="browse">
                <PaperClipIcon class="h-4 text-gray-400 mr-2" aria-hidden="true" />
                <span>Durchsuchen</span>
            </button>
        </div>

        <div v-else class="flex items-center justify-between">
            <PaperClipIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
            <div class="flex-1 ml-2 pr-1">{{ modelValue.name }}
                <span class="text-gray-500 text-xs">({{ filesize(modelValue.size) }})</span>
            </div>
            <button class="px-4 py-1 bg-gray-800 hover:bg-gray-700 rounded-md font-semibold text-xs text-white uppercase" type="button" @click="remove">
                Remove
            </button>
        </div>
    </div>
</template>

<script setup>
import { ref, watch } from 'vue';
import { PaperClipIcon } from "@heroicons/vue/24/outline";

// Props
const props = defineProps({
    modelValue: [File, Object],
    accept: String
});

// Emit 'update:modelValue' event
const emit = defineEmits(['update:modelValue']);

// Refs
const fileRef = ref(null);

// Methods
const filesize = (size) => {
    const i = Math.floor(Math.log(size) / Math.log(1024));
    return (size / Math.pow(1024, i)).toFixed(2) * 1 + ' ' + ['B', 'kB', 'MB', 'GB', 'TB'][i];
};

const browse = () => {
    fileRef.value.click();
};

const change = (event) => {
    emit('update:modelValue', event.target.files[0]);
};

const remove = () => {
    emit('update:modelValue', null);
};

// Watch for changes in modelValue
watch(() => props.modelValue, (newValue) => {
    if (!newValue) {
        fileRef.value.value = '';
    }
});
</script>
