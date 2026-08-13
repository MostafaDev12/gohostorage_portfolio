<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $developer = Admin::create([
            'name' => 'Developer',
            'email' => 'developer@developer.com',
            'password' => Hash::make('Password'),
        ]);

        $admin = Admin::create([
            'name' => 'Admin',
            'email' => 'admin@domain.com',

            'password' => Hash::make('Password'),
        ]);


        $developer->givePermissionTo(Permission::all());

        $admin->givePermissionTo(Permission::all());


    }
}
