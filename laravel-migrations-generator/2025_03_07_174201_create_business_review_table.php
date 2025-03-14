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
        Schema::create('business_review', function (Blueprint $table) {
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('business_id')->nullable();
            $table->string('title')->nullable();
            $table->integer('rating')->nullable();
            $table->text('comment')->nullable();
            $table->timestamp('review_date')->nullable()->default(DB::raw("now()"));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_review');
    }
};
