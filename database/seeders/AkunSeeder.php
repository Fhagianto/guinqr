<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =[
            [
                'username' => 'superadmin',
                'name' => 'Fadliman',
                'email' => 'sadmin@gmail.com',
                'level' => 'superadmin',
                'password' => bcrypt('sadmin123'),
            ],
            [
                'username' => 'admin',
                'name' => 'Clara',
                'email' => 'admin@gmail.com',
                'level' => 'admin',
                'password' => bcrypt('admin123'),
            ],
            [
                'username' => 'security',
                'name' => 'hadi kusuma dinata',
                'email' => 'security@gmail.com',
                'level' => 'security',
                'password' => bcrypt('security123'),
            ],
            [
                'username' => 'useracara',
                'name' => 'Feby',
                'email' => 'useracara@gmail.com',
                'level' => 'useracara',
                'password' => bcrypt('useracara123'),
            ]
            ];
            foreach ($user as $key => $value) {
                User::create($value);
            }
    }
}
