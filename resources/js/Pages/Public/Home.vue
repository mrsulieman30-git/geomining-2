<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import PublicLayout from '../../Layouts/PublicLayout.vue';
import { useI18n } from 'vue-i18n';

const { t } = useI18n();
</script>

<template>
    <PublicLayout>
        <Head title="Home" />
        <div class="py-20 bg-brand-navy text-white text-center">
            <h1 class="text-5xl font-bold mb-6">{{ t('welcome') }}</h1>
            <p class="text-xl text-brand-gold max-w-2xl mx-auto mb-10">Premium Mining Consultancy, Geological Services & Technical Laboratory.</p>
            <div class="flex justify-center space-x-4">
                <Link href="/services" class="px-8 py-3 bg-brand-blue rounded shadow text-white hover:bg-blue-600 transition">Explore Services</Link>
                <Link href="/contact" class="px-8 py-3 bg-slate-700 rounded shadow text-white hover:bg-slate-600 transition">Contact Team</Link>
            </div>
        </div>
    </PublicLayout>
</template>
