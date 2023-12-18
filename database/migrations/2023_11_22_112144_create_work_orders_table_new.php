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
            
            // General Stages
            $table->string('general_stages')->nullable();
            $table->string('check_in')->nullable();
            $table->string('initial_inspection')->nullable();
            $table->string('Wash_and_decontamination')->nullable();
            //status
            $table->string('general_stages_status')->default('Pending');
            $table->string('check_in_status')->default('Pending');
            $table->string('initial_inspection_status')->default('Pending');
            $table->string('Wash_and_decontamination_status')->default('Pending');

            // Paint Protection Film Stages
            $table->string('paint_protection_film_stages')->nullable();
            $table->string('PPF_cutting_alignment')->nullable();
            $table->string('PPF_polish')->nullable();
            $table->string('PPF_installation')->nullable();
            $table->string('PPF_curing_phase')->nullable();
            // Status
            $table->string('paint_protection_film_stages_status')->default('Pending');
            $table->string('PPF_cutting_alignment_status')->default('Pending');
            $table->string('PPF_polish_status')->default('Pending');
            $table->string('PPF_installation_status')->default('Pending');
            $table->string('PPF_curing_phase_status')->default('Pending');

            // Ceramic Coating Stages
            $table->string('ceramic_coating_stages')->nullable();
            $table->string('cc_ceramic_coating_rep')->nullable();
            $table->string('cc_paint_correction')->nullable();
            $table->string('cc_ceramic_coating_application')->nullable();
            $table->string('cc_curing_phase')->nullable();
            // status
            $table->string('ceramic_coating_stages_status')->default('Pending');
            $table->string('cc_ceramic_coating_rep_status')->default('Pending');
            $table->string('cc_paint_correction_status')->default('Pending');
            $table->string('cc_ceramic_coating_application_status')->default('Pending');
            $table->string('cc_curing_phase_status')->default('Pending');

            // Window Tint Stages
            $table->string('window_tint_stages')->nullable();
            $table->string('window_tint_measurement_cut')->nullable();
            $table->string('window_tint_application')->nullable();
            // status
            $table->string('window_tint_stages_status')->default('Pending');
            $table->string('window_tint_measurement_cut_status')->default('Pending');
            $table->string('window_tint_application_status')->default('Pending');

            // Final Stages
            $table->string('final_stages')->nullable();
            $table->string('final_inspection')->nullable();
            $table->string('completion_pickup')->nullable();
            // status
            $table->string('final_stages_status')->default('Pending');
            $table->string('final_inspection_status')->default('Pending');
            $table->string('completion_pickup_status')->default('Pending');

            // Ceramic Coating
            $table->string('ceramic_coating_kenzo_coating', 11)->nullable();
            $table->string('ceramic_coating_quartz_plus_coating', 11)->nullable();
            $table->string('ceramic_coating_quartz_coating', 11)->nullable();
            $table->string('ceramic_coating_premier_coating', 11)->nullable();
            $table->string('ceramic_coating_interior_pkg', 11)->nullable();
            $table->string('ceramic_coating_wheels_of_pkg', 11)->nullable();
            $table->decimal('ceramic_coating_price', 10, 2)->nullable();

            // PPF
            $table->string('ppf_full_car', 11)->nullable();
            $table->string('ppf_full_front_end', 11)->nullable();
            $table->string('ppf_partial_front_end', 11)->nullable();
            $table->string('ppf_partial_kit', 11)->nullable();
            $table->string('ppf_rockers', 11)->nullable();
            $table->string('ppf_headlights', 11)->nullable();
            $table->string('ppf_luggage_strip', 11)->nullable();
            $table->decimal('ppf_price', 10, 2)->nullable();

            // Window Tinting
            $table->string('wt_front_windows', 11)->nullable();
            $table->string('wt_full_vehicle', 11)->nullable();
            $table->string('wt_windshield', 11)->nullable();
            $table->string('wt_5', 11)->nullable();
            $table->string('wt_20', 11)->nullable();
            $table->string('wt_35', 11)->nullable();
            $table->string('wt_50', 11)->nullable();
            $table->string('wt_70', 11)->nullable();
            $table->decimal('wt_price', 10, 2)->nullable();

            // Paint Correction
            $table->string('pc_one_stage', 11)->nullable();
            $table->string('pc_two_stage', 11)->nullable();
            $table->string('pc_three_stage', 11)->nullable();
            $table->string('pc_wet_sand', 11)->nullable();
            $table->decimal('pc_price', 10, 2)->nullable();

            // Other Services
            $table->string('os_interior_detailing', 11)->nullable();
            $table->string('os_car_wrap', 11)->nullable();
            $table->string('os_rim_powder_coating', 11)->nullable();
            $table->string('os_rim_repair', 11)->nullable();
            $table->string('os_dent_repair', 11)->nullable();
            $table->string('os_caliper_painting', 11)->nullable();
            $table->decimal('os_price', 10, 2)->nullable();

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
