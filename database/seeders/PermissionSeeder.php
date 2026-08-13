<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $groupedPermissions = [
            'dashboard' => ['view.dashboard'],

            'admins' => [
                'admins.view',
                'admins.create',
                'admins.store',
                'admins.edit',
                'admins.update',
                'admins.delete',
            ],
            'users' => [
                'users.view',
                'users.create',
                'users.store',
                'users.edit',
                'users.update',
                'users.delete',
            ],
            'roles' => [
                'roles.view',
                'roles.create',
                'roles.store',
                'roles.edit',
                'roles.update',
                'roles.delete',
            ],
            'menus' => [
                'menus.view',
                'menus.create',
                'menus.store',
                'menus.edit',
                'menus.update',
                'menus.delete',
            ],
            'attributes' => [
                'attributes.view',
                'attributes.create',
                'attributes.store',
                'attributes.edit',
                'attributes.update',
                'attributes.delete',
            ],
            'faqs' => [
                'faqs.view',
                'faqs.create',
                'faqs.store',
                'faqs.edit',
                'faqs.update',
                'faqs.delete',
            ],
            'testimonials' => [
                'testimonials.view',
                'testimonials.create',
                'testimonials.store',
                'testimonials.edit',
                'testimonials.update',
                'testimonials.delete',
            ],
            'sliders' => [
                'sliders.view',
                'sliders.create',
                'sliders.store',
                'sliders.edit',
                'sliders.update',
                'sliders.delete',
            ],
            'domains' => [
                'domains.view',
                'domains.create',
                'domains.store',
                'domains.edit',
                'domains.update',
                'domains.delete',
            ],
            'hosting' => [
                'hosting.view',
                'hosting.create',
                'hosting.store',
                'hosting.edit',
                'hosting.update',
                'hosting.delete',
            ],
             'servers' => [
                'servers.view',
                'servers.create',
                'servers.store',
                'servers.edit',
                'servers.update',
                'servers.delete',
            ],
            'about' => [
                'about.edit',
                'about.update',

            ],
            'about structs' => [
                'about_structs.view',
                'about_structs.create',
                'about_structs.store',
                'about_structs.edit',
                'about_structs.update',
                'about_structs.delete',
            ],
            'benefits' => [
                'benefits.view',
                'benefits.create',
                'benefits.store',
                'benefits.edit',
                'benefits.update',
                'benefits.delete',
            ],
            'site_addresses' => [
                'site_addresses.view',
                'site_addresses.create',
                'site_addresses.store',
                'site_addresses.edit',
                'site_addresses.update',
                'site_addresses.delete',
            ],
            'plans' => [
                'plans.view',
                'plans.create',
                'plans.store',
                'plans.edit',
                'plans.update',
                'plans.delete',
            ],
            'services' => [
                'services.view',
                'services.create',
                'services.store',
                'services.edit',
                'services.update',
                'services.delete',
            ],
            'pages' => [
                'pages.view',
                'pages.create',
                'pages.store',
                'pages.edit',
                'pages.update',
                'pages.delete',
            ],
            'configrations' => [
                'configrations.edit',
                'configrations.update'
            ],
            'other' => [
                'roles',
                'settings',
                'about-us',
                'about-struc',
            ],
        ];


        foreach ($groupedPermissions as $group => $permissions) {
            foreach ($permissions as $permission) {
                Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'admin', 'group' => $group]);
            }
        }
    }
}
