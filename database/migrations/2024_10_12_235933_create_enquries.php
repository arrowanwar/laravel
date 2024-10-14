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
        Schema::create('enquries', function (Blueprint $table) {
            $table->id();
            $table->string('current_offoce_code');
            $table->unsignedBigInteger('officer_id');
            $table->foreign('officer_id')->references('id')->on('officers')->restrictOnDelete()->cascadeOnUpdate();
            $table->string('field_offoce_enqury_no');
            $table->date('field_offoce_enqury_entry_date');
            $table->string('div_offoce_enqury_no');
            $table->date('div_offoce_enqury_entry_date');
            $table->enum('hd_sec',['enquery_sec','special_enquery_sec']);
            $table->string('hd_offoce_enqury_no');
            $table->date('hd_offoce_enqury_entry_date');
            $table->string('enqury_no');
            $table->timestamp('create_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquries');
    }
};
