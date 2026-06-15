<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category');
            $table->text('summary')->nullable();
            $table->longText('content')->nullable();
            $table->date('published_at')->nullable();
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->string('main_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->string('tags')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
