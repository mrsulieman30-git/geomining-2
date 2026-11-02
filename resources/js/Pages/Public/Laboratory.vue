<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '../../Layouts/PublicLayout.vue';
</script>

<template>
    <PublicLayout>
        <Head title="Laboratory Services" />
        <div class="container mx-auto px-4 py-16">
            <h1 class="text-4xl font-bold text-brand-navy mb-8">Mining Laboratory (LIMS)</h1>
            <div class="bg-white p-8 shadow rounded">
                <p class="text-lg text-slate-700 mb-6">
                    Comprehensive testing portfolio including precious metal assays, base metals, multi-element geochemistry, and metallurgical characterization.
                </p>
                <div class="bg-brand-neutral p-4 rounded text-sm text-slate-600 border border-brand-border">
                    <strong>Note:</strong> All results are subject to rigorous QA/QC review before certificate release.
                </div>
            </div>
        </div>
    </PublicLayout>
</template>
