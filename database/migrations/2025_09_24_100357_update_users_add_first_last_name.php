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
            // Add new columns
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            
            // Drop old 'name' column
            $table->dropColumn('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Re-add 'name' column
            $table->string('name')->after('id');
            
            // Drop first_name and last_name
            $table->dropColumn(['first_name', 'last_name']);
        });
    }
};
