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
        Schema::table('business_review', function (Blueprint $table) {
            $table->foreign(['business_id'], 'business_review_business_id_fkey')->references(['business_id'])->on('business')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'], 'business_review_user_id_fkey')->references(['user_id'])->on('user_profile')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('business_review', function (Blueprint $table) {
            $table->dropForeign('business_review_business_id_fkey');
            $table->dropForeign('business_review_user_id_fkey');
        });
    }
};
