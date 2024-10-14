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
        Schema::create('officers_profiles', function (Blueprint $table) {

            $table->id();
            $table->string('frstname');
            $table->string('lastname');
            $table->string('post');
            $table->date('dob');
            $table->integer('mob');
            $table->string('pds');
            $table->string('email')->unique();
            $table->foreign('email')->references('email')->on('officers')->restrictOnDelete()->cascadeOnUpdate();
            $table->timestamp('create_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('officers_profiles');
    }
};
