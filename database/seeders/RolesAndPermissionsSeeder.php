<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create Permissions
        $permissions = [
            'customers.view', 'customers.create', 'customers.update', 'customers.archive',
            'leads.assign', 'leads.convert',
            'quotes.create', 'quotes.approve', 'quotes.send', 'quotes.accept_record',
            'contracts.view', 'contracts.create', 'contracts.approve', 'contracts.variation_approve',
            'projects.view', 'projects.create', 'projects.assign', 'projects.close',
            'projects.budget.view', 'projects.budget.update', 'projects.margin.view',
            'lab.orders.create', 'lab.samples.receive', 'lab.samples.accept',
            'lab.results.enter', 'lab.results.review', 'lab.qc.override', 'lab.certificates.release',
            'finance.invoices.view', 'finance.invoices.approve', 'finance.payments.reconcile',
            'finance.journals.post', 'finance.periods.close',
            'hr.employees.view', 'hr.payroll.view', 'hr.payroll.approve',
            'inventory.stock.adjust', 'procurement.purchase_orders.approve',
            'users.manage', 'roles.manage', 'audit.view', 'settings.manage'
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission);
        }

        // Create Roles and assign created permissions
        $superAdmin = Role::findOrCreate('Super Administrator');
        $superAdmin->givePermissionTo(Permission::all());

        $systemAdmin = Role::findOrCreate('System Administrator');
        $systemAdmin->givePermissionTo(['users.manage', 'roles.manage', 'settings.manage']);

        $customerRole = Role::findOrCreate('Customer Project Viewer');
        $customerRole->givePermissionTo(['projects.view']); // Minimal access example
    }
}
