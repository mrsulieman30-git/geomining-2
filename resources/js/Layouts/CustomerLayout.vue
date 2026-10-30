<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen bg-brand-neutral text-slate-800 flex flex-col">
        <header class="bg-white shadow-sm py-4">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <div class="font-bold text-xl text-brand-blue">Client Portal</div>
                <nav class="space-x-6 text-sm font-medium">
                    <a href="#" class="text-brand-slate hover:text-brand-blue transition">Dashboard</a>
                    <a href="#" class="text-brand-slate hover:text-brand-blue transition">Projects</a>
                    <a href="#" class="text-brand-slate hover:text-brand-blue transition">Lab Orders</a>
                    <a href="#" class="text-brand-slate hover:text-brand-blue transition">Invoices</a>
                </nav>
            </div>
        </header>

        <main class="flex-grow container mx-auto px-4 py-8">
            <slot />
        </main>
    </div>
</template>
