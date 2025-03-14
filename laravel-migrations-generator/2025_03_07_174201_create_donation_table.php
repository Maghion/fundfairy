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
        Schema::create('donation', function (Blueprint $table) {
            $table->bigIncrements('donation_id');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('request_id')->nullable();
            $table->decimal('amount', 10);
            $table->text('message')->nullable();
            $table->boolean('anon')->default(false);
            $table->timestamp('created_at')->nullable()->default(DB::raw("now()"));
        });
        DB::statement("alter table \"donation\" add column \"type\" donation_type not null");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donation');
    }
};
