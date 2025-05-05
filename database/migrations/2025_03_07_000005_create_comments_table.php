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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('donation_requests_id')->constrained()->onDelete('cascade');
            $table->enum('status', ['Pending', 'Approved', 'Rejected'])->default('Pending');
            $table->string('title');
            $table->text('comment');
            $table->unsignedBigInteger('parent_comment_id')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('comments', function (Blueprint $table) {
            // Drop foreign key constraint and user_id column
            $table->dropForeign(['user_id']);
            $table->dropColumn(['user_id']);
            $table->dropForeign('donation_requests_id');
            $table->dropColumn('donation_requests_id');
        });
        Schema::dropIfExists('comments');
    }
};
