<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'posts', function (Blueprint $table) {
                $table->id();
                $table->string("title", 255)->nullable();
                $table->text("description")->nullable();
                $table->string("slug", 255)->nullable();
                $table->text("content")->nullable();
                $table->string("image");
                $table->enum("posted", ['yes', 'no'])->default('no');
                $table->timestamps();
                $table->foreignId("category_id")->constrained()->onDelete('cascade')->nullable();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
