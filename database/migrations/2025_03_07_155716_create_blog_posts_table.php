<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Relations\HasMany;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('content');
            $table->enum('status', ['published', 'draft'])->default('published');
            $table->timestamp('created_at');
        });

        Schema::table('blog_posts', function (Blueprint $table) {
            // Add this line
            $table->unsignedBigInteger('user_id')->after('id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');

        Schema::table('blog_posts', function (Blueprint $table) {
            // Drop foreign key constraint and user_id column
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');

            // ...
        });
    }
};
