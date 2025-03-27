<template>
  <footer>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 pt-20">
      <div class="py-8 md:py-12">

        <!-- Bottom area -->
        <div class="text-center md:flex md:items-center md:justify-between mb-8 md:mb-6">

          <!-- Social links -->
          <ul class="inline-flex mb-4 md:order-2 md:ml-4 md:mb-0">
            <li>
              <Link
                class="flex justify-center items-center text-blue-500 bg-blue-100 hover:text-white hover:bg-blue-500 rounded-full transition duration-150 ease-in-out"
                href="#0" aria-label="Twitter">
              <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="m13.063 9 3.495 4.475L20.601 9h2.454l-5.359 5.931L24 23h-4.938l-3.866-4.893L10.771 23H8.316l5.735-6.342L8 9h5.063Zm-.74 1.347h-1.457l8.875 11.232h1.36l-8.778-11.232Z" />
              </svg>
              </Link>
            </li>
            <li class="ml-4">
              <Link
                class="flex justify-center items-center text-blue-500 bg-blue-100 hover:text-white hover:bg-blue-500 rounded-full transition duration-150 ease-in-out"
                href="#0" aria-label="Github">
              <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M16 8.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V22c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z" />
              </svg>
              </Link>
            </li>
            <li class="ml-4">
              <Link
                class="flex justify-center items-center text-blue-500 bg-blue-100 hover:text-white hover:bg-blue-500 rounded-full transition duration-150 ease-in-out"
                href="#0" aria-label="Telegram">
              <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M22.968 10.276a.338.338 0 0 0-.232-.253 1.192 1.192 0 0 0-.63.045s-14.019 5.038-14.82 5.596c-.172.121-.23.19-.259.272-.138.4.293.573.293.573l3.613 1.177a.388.388 0 0 0 .183-.011c.822-.519 8.27-5.222 8.7-5.38.068-.02.118 0 .1.049-.172.6-6.606 6.319-6.64 6.354a.138.138 0 0 0-.05.118l-.337 3.528s-.142 1.1.956 0a30.66 30.66 0 0 1 1.9-1.738c1.242.858 2.58 1.806 3.156 2.3a1 1 0 0 0 .732.283.825.825 0 0 0 .7-.622s2.561-10.275 2.646-11.658c.008-.135.021-.217.021-.317a1.177 1.177 0 0 0-.032-.316Z" />
              </svg>
              </Link>
            </li>
          </ul>

          <!-- Left links -->
          <div class="text-sm font-medium md:order-1 space-x-6 mb-2 md:mb-0">
            <Link class="text-gray-500 decoration-blue-500 decoration-2 underline-offset-2 hover:underline" href="/">
            Home</Link>
            <Link class="text-gray-500 decoration-blue-500 decoration-2 underline-offset-2 hover:underline"
              href="about">Über mich</Link>
            <Link class="text-gray-500 decoration-blue-500 decoration-2 underline-offset-2 hover:underline"
              href="impressum">Impressum</Link>
            <Link class="text-gray-500 decoration-blue-500 decoration-2 underline-offset-2 hover:underline"
              href="cookies">Cookies</Link>
          </div>

        </div>

        <div class="mt-12 border-t border-gray-200 pt-8">
          <p class="text-base text-gray-500 xl:text-center"> Designed and Developed with<span
              class="inline-block align-top"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"
                class="text-red-500 h-5 px-1">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z">
                </path>
              </svg></span>by <a href="https://korbitsch.at">Ing. Lukas Korbitsch</a></p>
          <p class="pt-4 text-base text-gray-500 xl:text-center"> © {{ new Date().getFullYear() }} Annika Korbitsch. Alle
            Rechte vorbehalten </p>
        </div>

      </div>

    </div>
  </footer>
</template>
<script setup>
</script>