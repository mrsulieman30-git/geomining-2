<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '../../Layouts/PublicLayout.vue';
</script>

<template>
    <PublicLayout>
        <Head title="Services" />
        <div class="container mx-auto px-4 py-16">
            <h1 class="text-4xl font-bold text-brand-navy mb-8">Our Capabilities</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-white shadow rounded border-t-4 border-brand-blue">
                    <h2 class="text-xl font-bold text-slate-800 mb-2">Mineral Exploration</h2>
                    <p class="text-slate-600">Geological mapping, geochemical sampling, and drill program planning.</p>
                </div>
                <div class="p-6 bg-white shadow rounded border-t-4 border-brand-gold">
                    <h2 class="text-xl font-bold text-slate-800 mb-2">Mine Planning</h2>
                    <p class="text-slate-600">Technical studies, operational consulting, and resource evaluation support.</p>
                </div>
                <div class="p-6 bg-white shadow rounded border-t-4 border-brand-green">
                    <h2 class="text-xl font-bold text-slate-800 mb-2">Environmental Baseline</h2>
                    <p class="text-slate-600">Monitoring services and environmental sample testing coordination.</p>
                </div>
            </div>
        </div>
    </PublicLayout>
</template>
