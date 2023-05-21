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
        Schema::create('people', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('FirstName', 45);
            $table->string('LastName', 45);
            $table->integer('Age');
            $table->string('PhoneNumber', 25);
            $table->string('Street', 50);
            $table->string('City', 60);
            $table->string('Country', 60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
