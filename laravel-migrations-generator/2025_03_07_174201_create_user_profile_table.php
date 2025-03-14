<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_profile', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('email')->unique('user_profile_email_key');
            $table->string('password_hash')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->text('biography')->nullable();
            $table->string('avatar')->nullable();
            $table->string('phone_number')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
        });
        DB::statement("alter table \"user_profile\" add column \"role\" user_role null");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profile');
    }
};
