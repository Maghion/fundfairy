<?php

namespace Database\Seeders;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('role_has_permissions')->truncate();
        DB::table('model_has_roles')->truncate();
        DB::table('model_has_permissions')->truncate();
        DB::table('permissions')->truncate();
        DB::table('roles')->truncate();
        DB::table('users')->truncate();
        DB::table('businesses')->truncate();
        DB::table('donation_requests')->truncate();
        DB::table('donations')->truncate();
        DB::table('business_reviews')->truncate();
        DB::table('comments')->truncate();
        DB::table('testimonials')->truncate();
        DB::table('blog_posts')->truncate();
        $this->call(RoleAndPermissionSeeder::class);
        $this->call(AdminEditorUserSeeder::class);
        $this->call(RandomUserSeeder::class);
        $this->call(RandomBusinessSeeder::class);
        $this->call(DonationRequestSeeder::class);
        $this->call(DonationSeeder::class);
        $this->call(BusinessReviewSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(BlogPostSeeder::class);
    }
}
