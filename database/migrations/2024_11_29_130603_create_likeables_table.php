<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('likeables', function (Blueprint $table) {
            $table->foreignId('user_id');
//            $table->foreignId('likeable_id');
//            $table->string('likeable_type');
            $table->morphs('likeable');
            $table->timestamps();
            $table->primary(['user_id', 'likeable_id', 'likeable_type']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likeables');
    }
};
