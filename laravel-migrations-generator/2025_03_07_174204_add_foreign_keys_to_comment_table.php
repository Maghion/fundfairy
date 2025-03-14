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
        Schema::table('comment', function (Blueprint $table) {
            $table->foreign(['request_id'], 'comment_request_id_fkey')->references(['request_id'])->on('donation_request')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'], 'comment_user_id_fkey')->references(['user_id'])->on('user_profile')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comment', function (Blueprint $table) {
            $table->dropForeign('comment_request_id_fkey');
            $table->dropForeign('comment_user_id_fkey');
        });
    }
};
