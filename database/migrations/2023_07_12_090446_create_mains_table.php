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
        Schema::create('mains', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_title');
            $table->string('name');
            $table->string('status');
            $table->longText('description');
            $table->string('bc_img');
            $table->integer('years');
            $table->integer('projects');
            $table->integer('companies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mains');
    }
};
