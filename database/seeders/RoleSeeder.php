<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::create(['name' => 'admin']);
        // Role::create(['name' => 'moderator']);
        // Role::create(['name' => 'user']);

        $user = User::find(1);
        $user->assignRole('admin');

    }
}
