<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'adminLaravel@gmail.com';
        $user->password = bcrypt('admin123456');

        $user->save();

        $user = new User();
        $user->name = 'Luciano';
        $user->email = 'luloxeneixe@gmail.com';
        $user->password = bcrypt('lulo123');

        $user->save();

    }
}
