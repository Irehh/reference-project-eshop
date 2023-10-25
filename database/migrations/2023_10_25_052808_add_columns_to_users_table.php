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
        Schema::table('users', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable();
            $table->string('phone_number')->nullable();
            $table->string('banner')->nullable();
            $table->text('about')->nullable();
            $table->string('link')->nullable();
            $table->string('location')->nullable();
            $table->enum('display', ['yes', 'no'])->default('no');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('phone_number');
            $table->dropColumn('banner');
            $table->dropColumn('about');
            $table->dropColumn('link');
            $table->dropColumn('location');
            $table->dropColumn('display');
        });
    }
};
