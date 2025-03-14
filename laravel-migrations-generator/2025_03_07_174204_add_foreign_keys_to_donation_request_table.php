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
        Schema::table('donation_request', function (Blueprint $table) {
            $table->foreign(['user_id'], 'donation_request_user_id_fkey')->references(['user_id'])->on('user_profile')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('donation_request', function (Blueprint $table) {
            $table->dropForeign('donation_request_user_id_fkey');
        });
    }
};
