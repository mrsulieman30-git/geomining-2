<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen bg-brand-neutral text-slate-800 flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-brand-navy text-white shadow-lg hidden md:block">
            <div class="p-6">
                <div class="font-bold text-xl text-brand-gold mb-8">Workspace</div>
                <nav class="space-y-2">
                    <a href="#" class="block py-2.5 px-4 rounded transition hover:bg-slate-700">Dashboard</a>
                    <a href="#" class="block py-2.5 px-4 rounded transition hover:bg-slate-700">CRM</a>
                    <a href="#" class="block py-2.5 px-4 rounded transition hover:bg-slate-700">Projects</a>
                    <a href="#" class="block py-2.5 px-4 rounded transition hover:bg-slate-700">Laboratory</a>
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="bg-white shadow-sm h-16 flex items-center justify-between px-6">
                <div class="font-semibold text-lg">Employee Portal</div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-slate-500">Employee User</span>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-brand-neutral p-6">
                <slot />
            </main>
        </div>
    </div>
</template>
