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
        Schema::create('warranties', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('year')->nullable();
            $table->string('colour')->nullable();
            $table->string('vin')->nullable();
            
            $table->string('exterior_package')->nullable();
            $table->string('interior')->nullable();
            $table->string('windows')->nullable();
            $table->string('wheels')->nullable();
            $table->string('trim')->nullable();
            $table->string('paint_correction')->nullable();
            $table->string('body')->nullable();
            $table->string('coating_duration')->nullable();
            
            $table->string('full_front_end')->nullable();
            $table->string('partial_front_end')->nullable();
            $table->string('full_body')->nullable();
            $table->string('attitionl_panels')->nullable();
            $table->string('ppf_brand')->nullable();
            $table->string('roll_serial_number')->nullable();
            $table->string('warranty_duration')->nullable();
            $table->string('installer')->nullable();
            $table->string('date_of_installation')->nullable();
            $table->string('date')->nullable();

            
            $table->string('customer_signature')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warranties');
    }
};
