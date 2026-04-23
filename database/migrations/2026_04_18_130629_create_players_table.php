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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->enum('role', ['player', 'team_captain'])->default('player');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('otp')->nullable();
            $table->string('password');
            $table->enum('your_role', ['bowler', 'all_rounder', 'batsman'])->nullable();
            $table->enum('batting_style', ['right_hand', 'left_hand'])->nullable();
            $table->enum('bowling_type', ['fast', 'medium', 'spin'])->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('team_name')->nullable();
            $table->string('team_logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
