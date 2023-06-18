<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Krunal Patel',
            'slug' => Str::slug('Krunal Patel'),
            'email' => 'krunal@gmail.com',
            'password' => '$2y$10$OelhudajU25jriUfuDYaF.TyPnfp7WCabJd6BeT8.ZucuWfGrFwIu', //123456
            'role' => 'admin',
            'status' => 'active'
        ]);

        User::factory(10)->create();
    }
}
