<template>
    <div data-aos="fade-down" class="max-w-4xl mx-auto text-center mt-20 px-5">
        <h2 class="text-2xl font-bold tracking-tight text-brand-headline sm:text-3xl my-3">
            Du hättest gern ein selbst gemaltes Bild, Schmuck oder hast Fragen zu meinen Arbeiten?
        </h2>
        <p class="text-lg text-brand-text dark:text-brand-text-dark">
            Ich helfe dir gerne bei deinem Anliegen weiter.
        </p>
        <p class="text-lg text-brand-text dark:text-brand-text-dark">
            Kontaktiere mich, ich freue mich auf dich.
        </p>

        <div class="flex flex-wrap justify-center items-center gap-5 py-5">
            <div class="flex ">
                <a :href="emailHref"
                    class="group flex text-sm font-medium text-brand-headline transition hover:text-brand dark:text-brand-headline-dark">
                    <i class="text-2xl fa-solid fa-envelope h-6 w-6 flex-none transition group-hover:fill-brand"></i>
                    <span class="ml-4">{{ emailText }}</span>
                </a>
            </div>
            <div class="flex">
                <a :href="phoneHref"
                    class="group flex text-sm font-medium text-brand-headline transition hover:text-brand dark:text-brand-headline-dark">
                    <i class="text-2xl fa-solid fa-phone h-6 w-6 flex-none transition group-hover:text-brand"></i>
                    <span class="ml-4">{{ phoneText }}</span>
                </a>
            </div>
            <div class="flex">
                <a :href="contact.webshop" target="_blank"
                    class="group flex text-sm font-medium text-brand-headline transition hover:text-brand dark:text-brand-headline-dark">
                    <i class="text-2xl fa-solid fa-earth-europe h-6 w-6 flex-none transition group-hover:text-brand"></i>
                    <span class="ml-4">{{ contact.webshop_short }}</span>
                </a>
            </div>
        </div>

    </div>
</template>
<script setup>
import contact from "@/contact.js"

const emailHref = `mailto:${contact.email}`;
const emailText = contact.email;
const phoneHref = `tel:${contact.phone}`;
const phoneText = contact.phoneText;
</script>