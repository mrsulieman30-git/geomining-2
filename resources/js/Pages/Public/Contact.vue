<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '../../Layouts/PublicLayout.vue';
</script>

<template>
    <PublicLayout>
        <Head title="Contact Us" />
        <div class="container mx-auto px-4 py-16">
            <h1 class="text-4xl font-bold text-brand-navy mb-8">Get In Touch</h1>
            <div class="max-w-xl mx-auto bg-white p-8 shadow rounded">
                <form @submit.prevent>
                    <div class="mb-4">
                        <label class="block text-slate-700 font-bold mb-2">Name</label>
                        <input type="text" class="w-full border-brand-border rounded px-4 py-2 bg-brand-neutral" placeholder="John Doe">
                    </div>
                    <div class="mb-4">
                        <label class="block text-slate-700 font-bold mb-2">Company</label>
                        <input type="text" class="w-full border-brand-border rounded px-4 py-2 bg-brand-neutral" placeholder="Mining Corp">
                    </div>
                    <div class="mb-6">
                        <label class="block text-slate-700 font-bold mb-2">Inquiry Type</label>
                        <select class="w-full border-brand-border rounded px-4 py-2 bg-brand-neutral">
                            <option>Consultation</option>
                            <option>Laboratory Request</option>
                        </select>
                    </div>
                    <button type="submit" class="w-full bg-brand-blue text-white font-bold py-3 rounded shadow hover:bg-blue-600 transition">Submit Inquiry</button>
                </form>
            </div>
        </div>
    </PublicLayout>
</template>
