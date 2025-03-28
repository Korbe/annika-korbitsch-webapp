<template>
    <label class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2" :for="id">{{ label }}</label>
    <div class="mt-1 sm:mt-0 sm:col-span-2">
        <input id="id"
               :value="modelValue"
               class="max-w-lg block w-full shadow-sm focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm border-gray-300 rounded-md"
               name="alt"
               type="text"
               @input="updateValue" />

        <div v-show="error">
            <p class="text-sm text-red-600">
                {{ error }}
            </p>
        </div>
    </div>
</template>

<script setup>
import { defineProps, defineEmits } from 'vue';

// Props definition
const props = defineProps({
    id: {
        type: String,
        required: true
    },
    label: {
        type: String,
        required: true
    },
    modelValue: {
        type: String,
        required: false
    },
    error: {
        type: String,
    }
});

// Emit function
const emit = defineEmits();

// Method to handle input change
const updateValue = (event) => {
    emit('update:modelValue', event.target.value);
};
</script>
