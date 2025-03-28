<template>
  <header class="w-full bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
      <div class="flex items-center justify-between h-16 md:h-20">

        <!-- Site branding -->
        <div v-if="!isHomePage" class="shrink-0 mr-4">
          <!-- Logo -->
          <Link class="block group text-xl" href="/" aria-label="Cruip">
          Annika Korbitsch
          </Link>
        </div>

        <!-- Desktop navigation -->
        <nav class="flex grow">

          <!-- Desktop sign in links -->
          <ul class="flex grow justify-end flex-wrap items-center">
            <li>
              <Link
                class="font-medium text-gray-600 decoration-brand decoration-2 underline-offset-2 hover:underline px-3 lg:px-5 py-2 flex items-center transition duration-150 ease-in-out"
                href="/about">Über mich</Link>
            </li>
            <li>
              <Link
                class="font-medium text-gray-600 decoration-brand decoration-2 underline-offset-2 hover:underline px-3 lg:px-5 py-2 flex items-center transition duration-150 ease-in-out"
                href="/werke">Werke</Link>
            </li>
          </ul>
        </nav>

      </div>
    </div>
  </header>
</template>
<script setup>
import { ref } from 'vue';

const isHomePage = ref(window.location.pathname === '/')
</script>