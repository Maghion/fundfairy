<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('testimonial', function (Blueprint $table) {
            $table->foreign(['user_id'], 'testimonial_user_id_fkey')->references(['user_id'])->on('user_profile')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('testimonial', function (Blueprint $table) {
            $table->dropForeign('testimonial_user_id_fkey');
        });
    }
};
