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
        Schema::create('marketing_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnUpdate()->nullOnDelete();
            $table->year('year')->nullable();
            $table->string('month')->nullable(); // e.g., 'January', 'February'
            $table->date('date')->nullable();
            $table->string('title')->nullable();
            $table->string('marketing_type')->nullable(); // site_visit, client_visit, telephone, email, social
            $table->string('status')->nullable(); // pending, processing, done, not_done

            $table->string('contact_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('contact_email')->nullable();
            $table->text('contact_address')->nullable();
            $table->text('contact_website')->nullable();
            $table->text('contact_social')->nullable();

            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketing_plans');
    }
};
