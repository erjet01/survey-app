<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('customer_surveys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age_range');
            $table->enum('gender', ['Laki-laki', 'Perempuan']);
            $table->tinyInteger('satisfaction_score'); // 1–5
            $table->text('feedback')->nullable();
            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_surveys');
    }
};
