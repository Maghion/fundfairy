<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminEditorUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marc = User::create([
            'first_name' => 'Marc',
            'last_name' => 'Hauschildt',
            'email' => 'marc.hauschildt@kirkwood.edu',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'biography' => 'Marc is the instructor for the Web Technologies Capstone course. He teaches a variety of technologies and software tools including PHP, Java, HTML, CSS, JavaScript, Python, WordPress, Shopify, Figma.',
            'avatar' => 'avatars/default-avatar.png',
        ]);

        $marc->assignRole('Admin');
    }
}
