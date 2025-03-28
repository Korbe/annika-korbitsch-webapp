<template>
    <div data-aos="fade-down" class="mx-auto max-w-4xl py-12 px-5">
        <h2 class="text-4xl font-semibold tracking-tight text-brand-headline sm:text-3xl dark:text-brand-headline-dark">Häufig gestellte Fragen</h2>
        <dl class="my-12 divide-y divide-gray-900/10">
            <Disclosure as="div" v-for="(faq, index) in faqs" :key="faq.question" class="py-6 first:pt-0 last:pb-0"
                :defaultOpen="index === 0" v-slot="{ open }">
                <dt>
                    <DisclosureButton
                        class="flex w-full items-start justify-between text-left text-brand-headline sm:text-3xl dark:text-brand-headline-dark">
                        <span class="cursor-pointer text-base/7 font-semibold">{{ faq.question }}</span>
                        <span class="ml-6 flex h-7 items-center">
                            <PlusIcon v-if="!open" class="cursor-pointer size-6" aria-hidden="true" />
                            <MinusIcon v-else class="cursor-pointer size-6" aria-hidden="true" />
                        </span>
                    </DisclosureButton>
                </dt>
                <DisclosurePanel as="dd" class="mt-2 pr-12">
                    <p class="text-base/7 text-brand-text dark:text-brand-text-dark">{{ faq.answer }}</p>
                </DisclosurePanel>
            </Disclosure>
        </dl>
    </div>
</template>
<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { MinusIcon, PlusIcon } from '@heroicons/vue/24/outline'

const faqs = [
    {
        question: "Bietest du auch Auftragsarbeiten an?", 
        answer: "Ja, ich nehme gerne Auftragsarbeiten an! Du kannst mir deine Wünsche und Ideen mitteilen, und ich werde ein einzigartiges Kunstwerk oder Schmuckstück speziell für dich anfertigen.",
    },
    {
        question: "Kann ich bereits bestehende Kunstwerke kaufen?", 
        answer: "Ja, du kannst auf meiner Webseite bereits fertige Bilder und Schmuckstücke kaufen. Stöbere einfach in meinem Onlineshop auf www.cuirma.at.",
    },
    {
        question: "Welche Art von Schmuck stellst du her?", 
        answer: "Ich fertige Schmuckstücke aus verschiedenen Materialien an, darunter Gold, Silber und Edelsteine. Jedes Schmuckstück wird von mir mit viel Liebe zum Detail und handwerklichem Können hergestellt.",
    },
    {
        question: "Wie lange dauert es, bis ich ein Auftragswerk erhalte?", 
        answer: "Die Fertigung eines Auftragswerks kann je nach Komplexität und Größe des Projekts unterschiedlich lange dauern. In der Regel dauert es etwa 3-6 Wochen. Ich halte dich jedoch während des Prozesses immer auf dem Laufenden.",
    },
    {
        question: "Wie kann ich ein Schmuckstück bei dir bestellen?", 
        answer: "Du kannst Schmuck direkt auf meiner Webseite www.cuirma.at bestellen. Für Auftragsarbeiten oder individuelle Wünsche kontaktiere mich einfach über das Kontaktformular oder per E-Mail.",
    },
    {
        question: "Kann ich ein Kunstwerk in einer bestimmten Größe oder Farbe anfertigen lassen?", 
        answer: "Ja, du kannst ein Kunstwerk in der gewünschten Größe oder Farbgestaltung anfertigen lassen. Teile mir einfach deine Vorstellungen mit, und ich werde sie umsetzen.",
    },
    {
        question: "Wie pflege ich meinen Schmuck richtig?", 
        answer: "Damit dein Schmuck lange schön bleibt, vermeide den Kontakt mit Wasser, Parfum und chemischen Reinigungsmitteln. Bewahre ihn an einem trockenen Ort auf und putze ihn regelmäßig mit einem weichen Tuch.",
    },
    {
        question: "Kann ich auch mehrere Schmuckstücke auf einmal bestellen?", 
        answer: "Ja, du kannst gerne mehrere Schmuckstücke auf einmal bestellen. Kontaktiere mich, wenn du spezielle Wünsche oder eine größere Bestellung aufgeben möchtest, und ich werde dir ein individuelles Angebot machen.",
    },
]
</script>