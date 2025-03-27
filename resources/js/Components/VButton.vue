<template>
  <component :is="isLink ? 'Link' : 'button'"
    class="cursor-pointer bg-white/90 text-brand-headline font-medium shadow-lg shadow-zinc-800/5 ring-1  ring-zinc-900/5 hover:text-brand dark:hover:bg-zinc-800 border dark:text-zinc-200 dark:bg-zinc-800/90 border-transparent py-2 px-5 rounded-3xl"
    :href="props.href">
    <slot></slot>
  </component>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
  href: {
    type: String,
    default: undefined,
  },
})

const isLink = computed(() => typeof props.href !== 'undefined')
</script>