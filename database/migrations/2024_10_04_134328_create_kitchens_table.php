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
        Schema::create('kitchens', function (Blueprint $table) {
            $table->date('data');
            $table->integer('cafe_da_manha_feito');
            $table->integer('cafe_da_manha_desperdicio');
            $table->integer('almoco_feito');
            $table->integer('almoco_desperdicio');
            $table->integer('cafe_da_tarde_feito');
            $table->integer('cafe_da_tarde_desperdicio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kitchens');
    }
};
