<template>
  <footer>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 pt-20">
      <div class="py-8 md:py-12">
        <!-- Bottom area -->
        <div class="text-center md:flex md:items-center md:justify-between mb-8 md:mb-6">

          <!-- Social links -->
          <ul class="inline-flex mb-4 md:order-2 md:ml-4 md:mb-0">
            <li>
              <a
                class="flex justify-center items-center text-brand bg-gray-100 hover:text-blue-500 hover:bg-brand-500 rounded-full transition duration-150 ease-in-out"
                :href="contact.facebook" target="_blank" aria-label="Facebook">
                <i class="fa-brands fa-square-facebook text-3xl"></i>
            </a>
            </li>
            <li class="ml-4">
              <a
                class="flex justify-center items-center text-brand bg-gray-100 hover:text-red-500 hover:bg-brand-500 rounded-full transition duration-150 ease-in-out"
                :href="contact.facebook" target="_blank" aria-label="Facebook">
                <i class="fa-brands fa-instagram text-3xl"></i>
            </a>
            </li>
          </ul>

          <!-- Left links -->
          <div class="text-sm font-medium md:order-1 space-x-6 mb-2 md:mb-0">
            <Link class="text-gray-500 decoration-brand decoration-2 underline-offset-2 hover:underline" href="/">
            Home</Link>
            <Link class="text-gray-500 decoration-brand decoration-2 underline-offset-2 hover:underline"
              href="about">Über mich</Link>
              <Link class="text-gray-500 decoration-brand decoration-2 underline-offset-2 hover:underline"
              href="werke">Meine Werke</Link>
            <Link class="text-gray-500 decoration-brand decoration-2 underline-offset-2 hover:underline"
              href="impressum">Impressum</Link>
            <Link class="text-gray-500 decoration-brand decoration-2 underline-offset-2 hover:underline"
              href="cookies">Cookies</Link>
          </div>

        </div>

        <div class="mt-12 border-t border-gray-200 pt-8">
          <Credit />
          <p class="pt-4 text-base text-gray-500 xl:text-center"> © {{ new Date().getFullYear() }} Annika Korbitsch. Alle
            Rechte vorbehalten </p>
        </div>

      </div>

    </div>
  </footer>
</template>
<script setup>
import Credit from '@/Components/Credit.vue';
import contact from '@/contact';

</script>