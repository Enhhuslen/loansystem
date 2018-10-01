<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Role::create([
            'name'        => 'User',
            'slug'        => 'user',
            'permissions' => json_encode([
                'create-post' => true,
            ]),
        ]);

        $admin = Role::create([
            'name'        => 'Admin',
            'slug'        => 'admin',
            'permissions' => json_encode([
                'update-post'  => true,
            ]),
        ]);

        $checkadmin = Role::create([
            'name'        => 'Check Admin',
            'slug'        => 'checkadmin',
            'permissions' => json_encode([
                'update-post'  => true,
                'publish-post' => true,
            ]),
        ]);

        $superadmin = Role::create([
          'name'        => 'Super Admin',
          'slug'        => 'superadmin',
          'permissions' => json_encode([
              'update-post'  => true,
              'publish-post' => true,
          ]),
        ]);
    }
}
