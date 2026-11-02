<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import EmployeeLayout from '../../../../Layouts/EmployeeLayout.vue';
import { defineProps } from 'vue';

const props = defineProps<{
    customers: {
        data: Array<{
            id: number;
            customer_code: string;
            legal_name: string;
            country: string;
            status: string;
        }>;
    };
}>();
</script>

<template>
    <EmployeeLayout>
        <Head title="Customer Management" />

        <div class="mb-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-brand-navy">Active Customers</h1>
            <button class="bg-brand-blue text-white px-4 py-2 rounded shadow text-sm font-medium hover:bg-blue-600 transition">Register Customer</button>
        </div>

        <div class="bg-white shadow rounded overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-brand-neutral border-b border-brand-border text-sm text-slate-600">
                        <th class="p-4 font-semibold">Customer Code</th>
                        <th class="p-4 font-semibold">Legal Name</th>
                        <th class="p-4 font-semibold">Country</th>
                        <th class="p-4 font-semibold">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="customer in customers.data" :key="customer.id" class="border-b border-brand-border hover:bg-brand-neutral transition">
                        <td class="p-4 font-mono text-sm text-brand-blue">{{ customer.customer_code }}</td>
                        <td class="p-4 font-medium text-slate-800">{{ customer.legal_name }}</td>
                        <td class="p-4 text-slate-600">{{ customer.country }}</td>
                        <td class="p-4">
                            <span class="bg-green-100 text-brand-green text-xs font-bold px-2 py-1 rounded">{{ customer.status }}</span>
                        </td>
                    </tr>
                    <tr v-if="customers.data.length === 0">
                        <td colspan="4" class="p-8 text-center text-slate-500">No customers found.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </EmployeeLayout>
</template>
