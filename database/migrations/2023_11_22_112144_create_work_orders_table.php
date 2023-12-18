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
        Schema::create('work_orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('make')->nullable();
            $table->string('colour')->nullable();
            $table->string('phone')->nullable();
            $table->string('model')->nullable();
            $table->string('year')->nullable();
            $table->string('email')->nullable();
            $table->string('v_i_n')->nullable();
            $table->string('plate')->nullable();
            $table->string('status')->default('General')->comment('General', 'Paint Protection Film', 'Ceramic Coating', 'Window Tint', 'Final');
            
            // Ceramic Coating
            // $table->string('ceramic_coating_kenzo_coating')->nullable();
            // $table->string('ceramic_coating_quartz_plus_coating')->nullable();
            // $table->string('ceramic_coating_quartz_coating')->nullable();
            // $table->string('ceramic_coating_premier_coating')->nullable();
            // $table->string('ceramic_coating_interior_pkg')->nullable();
            // $table->string('ceramic_coating_wheels_of_pkg')->nullable();
            // $table->decimal('ceramic_coating_price', 10, 2)->nullable();

            // // PPF
            // $table->string('ppf_full_car')->nullable();
            // $table->string('ppf_client_notes')->nullable();
            // $table->string('ppf_payment_stub')->nullable();
            // $table->string('ppf_payment_terms')->nullable();
            // $table->decimal('ppf_price', 10, 2)->nullable();

            // Additional Ceramic Coating
            $table->string('cc_payment_terms')->nullable();
            $table->string('cc_client_notes')->nullable();
            $table->string('cc_payment_stub')->nullable();
            $table->decimal('cc_price', 10, 2)->nullable();

            $table->text('additional_requests')->nullable();
            $table->string('total_price')->nullable();
            $table->string('mileage_in_price')->nullable();
            $table->text('note')->nullable();
            $table->string('int')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('customer_signature')->nullable();
            $table->string('defects')->nullable();
            $table->string('date')->nullable();
            $table->string('drivers_license')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_orders');
    }
};
