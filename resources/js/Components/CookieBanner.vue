<template>
    <div
        v-if="showBanner"
        class="fixed bottom-0 left-0 w-full border-t border-gray-300 bg-white dark:bg-zinc-900 text-brand-text dark:text-brand-text-dark p-4 flex justify-between items-center z-10"
    >
        <p>
            Mit dem Besuch dieser Website stimmst du der Verwendung von Cookies
            zu.
        </p>
        <VButton
            @click="hideBanner"
            aria-label="Banner schließen"
        >
            <XMarkIcon class="h-5" />
        </VButton>
    </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import VButton from "./VButton.vue";
import { XMarkIcon } from "@heroicons/vue/24/outline";

const showBanner = ref(false);

onMounted(() => {
    const cookieAccepted = localStorage.getItem("cookieAccepted");
    if (!cookieAccepted) {
        showBanner.value = true;
    }
});

function hideBanner() {
    showBanner.value = false;
    localStorage.setItem("cookieAccepted", "true");
    n;
}
</script>
