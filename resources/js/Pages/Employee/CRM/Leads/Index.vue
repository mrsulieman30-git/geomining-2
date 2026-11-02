<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import EmployeeLayout from '../../../../Layouts/EmployeeLayout.vue';
import { defineProps } from 'vue';

const props = defineProps<{
    leads: {
        data: Array<{
            id: number;
            reference: string;
            company_name: string;
            contact_person: string;
            status: string;
            estimated_value: number;
            currency: string;
        }>;
    };
}>();
</script>

<template>
    <EmployeeLayout>
        <Head title="Leads Management" />

        <div class="mb-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-brand-navy">CRM Leads</h1>
            <button class="bg-brand-blue text-white px-4 py-2 rounded shadow text-sm font-medium hover:bg-blue-600 transition">Create Lead</button>
        </div>

        <div class="bg-white shadow rounded overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-brand-neutral border-b border-brand-border text-sm text-slate-600">
                        <th class="p-4 font-semibold">Reference</th>
                        <th class="p-4 font-semibold">Company</th>
                        <th class="p-4 font-semibold">Contact</th>
                        <th class="p-4 font-semibold">Status</th>
                        <th class="p-4 font-semibold">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="lead in leads.data" :key="lead.id" class="border-b border-brand-border hover:bg-brand-neutral transition">
                        <td class="p-4 font-mono text-sm text-brand-blue">{{ lead.reference }}</td>
                        <td class="p-4 font-medium text-slate-800">{{ lead.company_name }}</td>
                        <td class="p-4 text-slate-600">{{ lead.contact_person }}</td>
                        <td class="p-4">
                            <span class="bg-blue-100 text-brand-blue text-xs font-bold px-2 py-1 rounded">{{ lead.status }}</span>
                        </td>
                        <td class="p-4 text-right tabular-nums text-slate-800">{{ lead.estimated_value }} {{ lead.currency }}</td>
                    </tr>
                    <tr v-if="leads.data.length === 0">
                        <td colspan="5" class="p-8 text-center text-slate-500">No leads found.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </EmployeeLayout>
</template>
