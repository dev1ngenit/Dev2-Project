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
        Schema::table('admins', function (Blueprint $table) {
            $table->string('full_name')->nullable()->after('email');
            $table->string('company_name')->nullable()->after('full_name');
            $table->string('contact_phone')->nullable()->after('company_name');
            $table->string('company_site')->nullable()->after('contact_phone');
            $table->string('country')->nullable()->after('company_site');
            $table->string('language')->default('en')->after('country');
            $table->string('time_zone')->default('UTC')->after('language');
            $table->string('currency')->default('USD')->after('time_zone');
            $table->json('communication_preferences')->nullable()->after('currency');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn([
                'full_name',
                'company_name', 
                'contact_phone',
                'company_site',
                'country',
                'language',
                'time_zone',
                'currency',
                'communication_preferences'
            ]);
        });
    }
};