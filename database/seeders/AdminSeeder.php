<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $roles = ['super_admin', 'admin', 'project_manager', 'cs'];
        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role, 'guard_name' => 'web']);
        }

        $admin = User::firstOrCreate(
            ['email' => 'admin@morabangun.com'],
            [
                'name'     => 'MBS Admin',
                'password' => bcrypt('Mora@2026!'),
            ]
        );

        $admin->assignRole('super_admin');
    }
}
