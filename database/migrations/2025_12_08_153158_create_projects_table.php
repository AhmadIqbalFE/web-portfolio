<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('category')->nullable(); 
        $table->string('image')->nullable();
        $table->text('description')->nullable();
        $table->string('author')->default('Ahmad Iqbal');
        $table->timestamps();
    });
}

};
