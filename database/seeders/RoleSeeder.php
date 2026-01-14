<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::firstOrCreate(['name' => 'admin']); // Création rôle
        $permission = Permission::firstOrCreate(['name' => 'view dashboard']); // Création permission
        $role->givePermissionTo($permission); // Assignation de la permission au rôle
    }
}
