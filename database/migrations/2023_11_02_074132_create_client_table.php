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
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('account_num', 15)->unique();
            $table->string('name')->nullable();
            $table->string('physical1')->nullable();
            $table->string('physical2')->nullable();
            $table->string('physical3')->nullable();
            $table->string('telephone')->nullable();
            $table->double('dcbalance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
