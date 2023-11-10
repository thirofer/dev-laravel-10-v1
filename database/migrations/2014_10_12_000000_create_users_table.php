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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('login', 20);
            $table->integer('active');
            $table->integer('insert_by');
            $table->timestamps('insert_at');
            $table->integer('update_by')->nullable();
            $table->timestamps('update_at');
            $table->integer('delete_by')->nullable();
            $table->timestamps('delete_at');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
