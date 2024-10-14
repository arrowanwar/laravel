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
        Schema::create('demo', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('col1');
            $table->string('col2');
            $table->text('col3');
            $table->date('col4');
            $table->float('col5');
            $table->boolean('col6');
            $table->enum('col7', ['pending','completed']);
            $table->timestamp('create_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demo');
    }
};
