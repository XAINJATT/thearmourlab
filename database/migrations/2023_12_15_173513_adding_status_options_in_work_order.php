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
        Schema::table('work_orders', function (Blueprint $table) {
            // $table->string('status')->default('General')->comment('General', 'Paint Protection Film', 'Ceramic Coating', 'Window Tint', 'Final');

            // General Stages
            $table->string('general_stages')->nullable();
            $table->string('check_in')->nullable();
            $table->string('initial_inspection')->nullable();
            $table->string('Wash_and_decontamination')->nullable();
            //status
            $table->text('general_stages_status')->default('Pending');
            $table->text('check_in_status')->default('Pending');
            $table->text('initial_inspection_status')->default('Pending');
            $table->text('Wash_and_decontamination_status')->default('Pending');

            // Paint Protection Film Stages
            $table->text('paint_protection_film_stages')->nullable();
            $table->text('PPF_cutting_alignment')->nullable();
            $table->text('PPF_polish')->nullable();
            $table->text('PPF_installation')->nullable();
            $table->text('PPF_curing_phase')->nullable();
            // Status
            $table->text('paint_protection_film_stages_status')->default('Pending');
            $table->text('PPF_cutting_alignment_status')->default('Pending');
            $table->text('PPF_polish_status')->default('Pending');
            $table->text('PPF_installation_status')->default('Pending');
            $table->text('PPF_curing_phase_status')->default('Pending');

            // Ceramic Coating Stages
            $table->text('ceramic_coating_stages')->nullable();
            $table->text('cc_ceramic_coating_rep')->nullable();
            $table->text('cc_paint_correction')->nullable();
            $table->text('cc_ceramic_coating_application')->nullable();
            $table->text('cc_curing_phase')->nullable();
            // status
            $table->text('ceramic_coating_stages_status')->default('Pending');
            $table->text('cc_ceramic_coating_rep_status')->default('Pending');
            $table->text('cc_paint_correction_status')->default('Pending');
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
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('work_orders', function (Blueprint $table) {
            //
        });
    }
};
