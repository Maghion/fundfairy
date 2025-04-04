<?php

namespace Database\Seeders;

use App\Models\Business;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = include database_path("seeders/data/users.php");
        $userIds = User::pluck('id')->toArray();
        foreach ($users as $user) {
            $user['user_id'] = $userIds[array_rand($userIds)];
            $user['created_at'] = now();
            $user['updated_at'] = now();
        }
        DB::table('users')->insert($users);

    }
}
