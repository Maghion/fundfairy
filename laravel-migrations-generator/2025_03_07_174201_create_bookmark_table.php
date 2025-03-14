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
        Schema::create('bookmark', function (Blueprint $table) {
            $table->bigInteger('user_id');
            $table->bigInteger('business_id');
            $table->timestamp('created_at')->nullable()->default(DB::raw("now()"));

            $table->primary(['user_id', 'business_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookmark');
    }
};
