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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('type'); // check-in, check-out, overtime-check-in, overtime-check-out
            $table->text('notes')->nullable();
            $table->timestamps();
        });
        
        // Add card_uid column to users table
        Schema::table('users', function (Blueprint $table) {
            $table->string('card_uid')->nullable()->unique()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
        
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('card_uid');
        });
    }
};