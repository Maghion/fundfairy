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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('donation_request_id');
            $table->enum('status', ['Pending', 'Approved', 'Rejected'])->default('Pending');
            $table->string('title');
            $table->text('comment');
            $table->unsignedBigInteger('parent_comment_id');
            $table->timestamps();
            //foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('donation_request_id')->references('id')->on('donation_request')->onDelete('cascade');
            $table->foreign('parent_comment_id')->references('id')->on('comments')->onDelete('cascade');
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
            $table->dropForeign('donation_request_id');
            $table->dropColumn('donation_request_id');
            $table->dropForeign('parent_comment_id');
            $table->dropColumn('parent_comment_id');
        });
        Schema::dropIfExists('comments');
    }
};
