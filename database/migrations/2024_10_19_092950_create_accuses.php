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
        Schema::create('accuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('case_id')->constrained();
            $table->foreignId('enquries_detail_id')->constrained();
            $table->timestamp('create_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accuses');
    }
};
