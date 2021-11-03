<?php

use App\User;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_general = User::create([
            'id' => Uuid::uuid4()->toString(),
            'first_name' => 'admin',
            "last_name" => 'admin',
            "email" => 'admin@admin.com',
            "password" => bcrypt('admin123'),
        ]);
        $admin_general->assignRole('Admin');

        $talent = User::create([
            'id' => Uuid::uuid4()->toString(),
            'first_name' => 'Ari',
            'last_name' => 'Pratama',
            'email' => 'apputra16@gmail.com',
            'password' => bcrypt('dimas2011'),
        ]);
        $talent->assignRole('User');
    }
}
