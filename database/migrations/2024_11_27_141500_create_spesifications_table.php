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
        Schema::create('spesifications', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            $table->string('mesin');
            $table->string('rangka');
            $table->string('dimensi');
            $table->string('kelistrikan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spesifications');
    }
};
