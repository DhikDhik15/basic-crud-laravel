<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Eloquent\Model;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $role = Role::firstOrCreate([
            'name' => 'management modules'
        ]);

        $role->givePermissionTo([
            'modules.create',
            'modules.update',
            'modules.edit',
            'modules.delete'
        ]);
    }
}
