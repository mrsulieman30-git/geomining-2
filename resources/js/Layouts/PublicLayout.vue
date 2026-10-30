<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen bg-brand-neutral text-slate-800 flex flex-col">
        <header class="bg-brand-navy text-white py-4 shadow-sm">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <div class="font-bold text-xl text-brand-gold">Mining System</div>
                <nav class="space-x-6">
                    <Link href="/" class="hover:text-brand-gold transition">Home</Link>
                    <a href="#" class="hover:text-brand-gold transition">Services</a>
                    <a href="#" class="hover:text-brand-gold transition">Laboratory</a>
                </nav>
            </div>
        </header>

        <main class="flex-grow">
            <slot />
        </main>

        <footer class="bg-slate-800 text-slate-400 py-8">
            <div class="container mx-auto px-4 text-center">
                &copy; {{ new Date().getFullYear() }} Enterprise Mining System. All rights reserved.
            </div>
        </footer>
    </div>
</template>
