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
        Schema::create('work_order_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('car_name')->nullable();
            $table->bigInteger('work_order_id')->nullable();
            $table->string('status')->default('General')->comment('General', 'Paint Protection Film', 'Ceramic Coating', 'Window Tint', 'Final');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_order_statuses');
    }
};
