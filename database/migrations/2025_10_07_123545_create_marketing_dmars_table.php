<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('marketing_dmars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->year('year')->nullable();
            $table->date('date')->nullable();
            $table->string('month', 10)->nullable();
            $table->string('activity', 50)->nullable();
            $table->string('company', 100)->nullable();
            $table->string('service', 50)->nullable();
            $table->string('products', 100)->nullable();
            $table->double('tentative')->nullable();
            $table->text('comments')->nullable();
            $table->string('action_on_fail', 100)->nullable();
            $table->string('current_status', 50)->nullable();
            $table->string('client_type', 50)->nullable();
            $table->string('sector')->nullable();
            $table->string('sub_sector')->nullable();
            $table->text('area')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('marketing_dmars');
    }
};
