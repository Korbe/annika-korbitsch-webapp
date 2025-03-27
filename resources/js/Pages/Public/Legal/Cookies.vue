<template>
    <PublicLayout>
        <div class="bg-gradient-to-b from-gray-50 to-white">
            <div class="mx-auto max-w-5xl py-30">
                <header>
                    <h1
                        class="text-4xl font-bold tracking-tight text-brand-headline sm:text-5xl dark:text-brand-headline-dark">
                        Datenschutzerklärung
                    </h1>

                    <p class="mt-2 text-brand-text dark:text-brand-text-dark">
                        Der Schutz Ihrer personenbezogenen Daten ist mir ein besonderes Anliegen. Ich verarbeite Ihre
                        Daten
                        daher ausschließlich auf
                        Grundlage der gesetzlichen Bestimmungen (DSGVO, TKG 2003). In dieser Datenschutzerklärung
                        informiere
                        ich Sie darüber, wie
                        ich Ihre Daten im Rahmen meiner Website erhebe und verarbeite.
                    </p>
                </header>

                <section>
                    <h2 class="mt-6 mb-2 text-lg text-brand-headline-text dark:text-brand-headline-dark">
                        1. Kontakt mit mir
                    </h2>

                    <p class="text-brand-text dark:text-brand-text-dark">
                        Wenn Sie per E-Mail oder Telefon Kontakt mit mir aufnehmen, werden Ihre angegebenen Daten (z. B.
                        Name, E-Mail-Adresse, Telefonnummer)
                        zwecks Bearbeitung der Anfrage und für den Fall von Anschlussfragen bei mir gespeichert. Diese
                        Daten
                        gebe ich nicht an Dritte weiter.
                    </p>
                </section>

                <section>
                    <h2 class="mt-6 mb-2 text-lg text-brand-headline-text dark:text-brand-headline-dark">
                        2. Web-Analyse (Google Analytics)
                    </h2>

                    <p class="text-brand-text dark:text-brand-text-dark">
                        Ich nutze Google Analytics, einen Dienst der Google LLC, um die Nutzung dieser Website
                        auszuwerten.
                        Dabei werden Cookies verwendet.
                        Ihre IP-Adresse wird anonymisiert, sodass keine direkte Zuordnung zu Ihrer Person möglich ist.
                        Die
                        erhobenen Daten können in die USA übertragen werden.
                        Sie können die Erfassung Ihrer Daten durch ein Browser-Plugin verhindern: <a class="underline"
                            href="https://tools.google.com/dlpage/gaoptout">https://tools.google.com/dlpage/gaoptout</a>.
                        Weitere Informationen
                        finden Sie in der Datenschutzerklärung von Google: <a class="underline"
                            href="https://policies.google.com/privacy">https://policies.google.com/privacy</a>.

                    </p>
                </section>

                <section>
                    <h2 class="mt-6 mb-2 text-lg text-brand-headline-text dark:text-brand-headline-dark">
                        3. Cookies
                    </h2>
                    <p class="text-brand-text dark:text-brand-text-dark">
                        Meine Website verwendet Cookies, um das Benutzererlebnis zu verbessern. Cookies sind kleine
                        Textdateien, die auf Ihrem Endgerät abgelegt werden.
                        Sie richten keinen Schaden an. Falls Sie keine Speicherung von Cookies wünschen, können Sie
                        Ihren
                        Browser so einrichten, dass er Sie
                        über das Setzen von Cookies informiert und Sie dies nur im Einzelfall erlauben. Alternativ
                        können
                        Sie Cookies auch vollständig deaktivieren.
                        Beachten Sie jedoch, dass dadurch die Funktionalität der Website eingeschränkt sein kann.
                    </p>
                </section>

                <section>
                    <h2 class="mt-6 mb-2 text-lg text-brand-headline-text dark:text-brand-headline-dark">
                        4. Ihre Rechte
                    </h2>
                    <p class="text-brand-text dark:text-brand-text-dark">
                        Sie haben jederzeit das Recht auf Auskunft über die Daten, die ich von Ihnen gespeichert habe.
                        Zusätzlich haben Sie das Recht auf Berichtigung,
                        Löschung, Einschränkung der Verarbeitung und Datenübertragbarkeit. Falls Sie glauben, dass die
                        Verarbeitung Ihrer Daten gegen geltendes Datenschutzrecht
                        verstößt oder Ihre datenschutzrechtlichen Ansprüche verletzt wurden, können Sie sich bei mir
                        oder
                        bei der zuständigen Datenschutzbehörde beschweren.
                        In Österreich ist dies die Datenschutzbehörde: <a class="underline"
                            href="https://www.dsb.gv.at">https://www.dsb.gv.at</a>.
                    </p>
                </section>

                <section>
                    <h2 class="mt-6 mb-2 text-lg text-brand-headline-text dark:text-brand-headline-dark">
                        5. Verantwortlich für die Datenverarbeitung
                    </h2>
                    <p class="text-brand-text dark:text-brand-text-dark">
                        Name: {{ contact.firstName }} {{ contact.lastName }}
                    </p>
                    <p class="text-brand-text dark:text-brand-text-dark">
                        E-Mail: {{ contact.email }}
                    </p>
                </section>
            </div>
        </div>
    </PublicLayout>
</template>
<script setup>
import contact from '@/contact';
import PublicLayout from '@/Layouts/Public/PublicLayout.vue';

</script>