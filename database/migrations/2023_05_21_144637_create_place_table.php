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
        Schema::create('place', function (Blueprint $table) {
            $table->id();
            $table->string("ownerName");
            $table->float("size");
            $table->float("price");
            $table->string("phoneNumber");
            $table->foreignId('locations_id')->constrained()->onDelete("cascade");
            $table->integer("streetNumber");
            $table->string("streetWide");
            $table->integer("floor");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('place');
    }
};
