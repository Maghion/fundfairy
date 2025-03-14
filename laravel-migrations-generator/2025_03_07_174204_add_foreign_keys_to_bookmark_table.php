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
        Schema::table('bookmark', function (Blueprint $table) {
            $table->foreign(['business_id'], 'bookmark_business_id_fkey')->references(['business_id'])->on('business')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'], 'bookmark_user_id_fkey')->references(['user_id'])->on('user_profile')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookmark', function (Blueprint $table) {
            $table->dropForeign('bookmark_business_id_fkey');
            $table->dropForeign('bookmark_user_id_fkey');
        });
    }
};
