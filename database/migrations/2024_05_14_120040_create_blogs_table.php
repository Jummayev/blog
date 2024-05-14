<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->text("title");
            $table->string("image");
            $table->string("tag");
            $table->text("description");
            $table->integer("is_top")->default(0);
            $table->integer("is_banner")->default(0);
            $table->integer("is_popular")->default(0);
            $table->integer("type");
            $table->integer("view_count")->default(0);
            $table->integer("status")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
