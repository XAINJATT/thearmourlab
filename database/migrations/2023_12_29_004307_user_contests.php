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
        Schema::create('user_contests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('contest_id');
            $table->bigInteger('user_id');
            $table->tinyInteger('status')->default('0')->comment('0 - Upcomming , 1 - Announced , 2 - Canceled');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contests');
    }
};
