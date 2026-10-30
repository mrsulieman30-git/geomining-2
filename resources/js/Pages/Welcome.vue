<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Welcome" />
    <div class="min-h-screen flex flex-col items-center justify-center bg-brand-navy text-white">
        <h1 class="text-4xl font-bold mb-4">Enterprise Mining System</h1>
        <p class="text-lg text-brand-gold mb-8">Geological Services & Laboratory Management</p>

        <div class="flex space-x-4">
            <a href="#" class="px-6 py-2 bg-brand-blue rounded shadow hover:bg-blue-600 transition">Customer Portal</a>
            <a href="#" class="px-6 py-2 bg-brand-slate rounded shadow hover:bg-slate-700 transition">Employee Login</a>
        </div>
    </div>
</template>
