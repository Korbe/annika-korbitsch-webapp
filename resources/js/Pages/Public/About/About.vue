<template>
    <PublicLayout>
        <div class="bg-gradient-to-b from-gray-50 to-white">
            <div class="mx-auto max-w-6xl py-16 flex flex-col lg:flex-row justify-center items-center lg:space-x-7">

                <div data-aos="fade-right" class="px-10">
                    <img src="images/me.jpg" class=" rounded-lg max-h-[500px] lg:max-h-[800px]" />
                </div>
                <div data-aos="fade-left" class="px-7 space-y-4 max-w-2xl text-brand">

                    <h1 class="text-4xl text-black font-bold tracking-tight py-5 sm:text-5xl"> Ich bin Annika
                        Korbitsch. Aus dem Lavanttal, male und gestalte Schmuck. </h1>

                    <p>
                        In meiner Ausbildung zum Goldschmied und Graveur an der HTL Ferlach wurde nicht nur mein
                        handwerkliches Können geschult, sondern auch meine Liebe zur Kunst entfacht. Diese Zeit legte
                        den Grundstein für eine Reise, die weit über die Technik hinausging. Nach meinem Abschluss
                        erkannte ich, dass meine wahre Leidenschaft in der Verbildlichung meiner Gedanken und meiner
                        Seele lag.
                    </p>
                    <p>Mit dieser Erkenntnis begann ich, all meine Energie in die Kunst zu investieren. Sie wurde zu
                        meinem Sprachrohr, mit dem ich meine inneren Konflikte, Ängste und Hoffnungen sichtbar machte.
                        Dabei stellte ich fest, dass es meine größte Herausforderung ist, meine zwei Seelen im
                        Gleichgewicht zu halten - zwei gegensätzliche, aber untrennbare Kräfte.
                    </p>
                    <p>
                        Die eine Seite in mir sehnt sich nach Frieden, Liebe, Schönheit und Geborgenheit. Sie möchte
                        sich in der Fantasie verlieren, in der Freiheit schweben und in der Hoffnung ertrinken. Doch die
                        andere Seite zwingt mich, den Schrecken der Realität zu zeigen. Sie weiß, dass Licht erst durch
                        Dunkelheit geschätzt wird, dass wahrer Frieden nur im Kontrast zur Verzweiflung erkennbar ist.
                    </p>
                    <p>
                        Deshalb vereint meine Kunst beides: Krieg und Hoffnung, Verzweiflung und Erlösung. Oft ist es
                        die Fantasie, die mir hilft, diese Gegensätze zu verbinden - sie erlaubt mir, das
                        Unaussprechliche sichtbar zu machen. Sie gibt mir die Freiheit, meine tiefsten Emotionen auf die
                        Leinwand zu bringen - ungeschönt, aber auch voller Schönheit und Hoffnung.
                    </p>
                </div>
            </div>
        </div>

        <Testimonial />

        <ContactCta />
    </PublicLayout>
</template>
<script setup>
import ContactCta from '@/Components/ContactCta.vue';
import PublicLayout from '@/Layouts/Public/PublicLayout.vue';
import Testimonial from './partials/Testimonial.vue';

</script>