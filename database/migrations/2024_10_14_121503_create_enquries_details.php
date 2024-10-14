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
        Schema::create('enquries_details', function (Blueprint $table) {
            $table->id();
            $table->string('accused_name',50);
            $table->string('accused_father_name',50);
            $table->string('accused_village_name',50);
            $table->string('accused_police_station',50);
            $table->string('accused_district',50);
            $table->string('accused_office_name',50);
            $table->string('accused_office_post',50);
            $table->decimal('accused_office_grade',50);
            $table->string('alligation_details',500);
            $table->unsignedBigInteger('officer_id');
            $table->foreign('officer_id')->references('id')->on('officers')->restrictOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('enquries_id');
            $table->foreign('enquries_id')->references('id')->on('enquries')->restrictOnDelete()->cascadeOnUpdate();
            $table->timestamp('create_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquries_details');
    }
};
