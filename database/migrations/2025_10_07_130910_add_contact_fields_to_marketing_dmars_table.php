<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('marketing_dmars', function (Blueprint $table) {
            $table->string('contact_name')->nullable()->after('area');
            $table->string('contact_number')->nullable()->after('contact_name');
            $table->string('contact_email')->nullable()->after('contact_number');
            $table->text('contact_address')->nullable()->after('contact_email');
            $table->text('contact_website')->nullable()->after('contact_address');
            $table->text('contact_social')->nullable()->after('contact_website');
        });
    }

    public function down(): void
    {
        Schema::table('marketing_dmars', function (Blueprint $table) {
            $table->dropColumn([
                'contact_name',
                'contact_number',
                'contact_email',
                'contact_address',
                'contact_website',
                'contact_social'
            ]);
        });
    }
};
