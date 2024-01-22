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
            // Modifying existing columns to TEXT type with default value 'Pending'
            $columnsToChange = [
                'general_stages_status',
                'paint_protection_film_stages_status',
                'PPF_cutting_alignment_status',
                'PPF_polish_status',
                'PPF_installation_status',
                'PPF_curing_phase_status',
                'ceramic_coating_stages_status',
                'cc_ceramic_coating_rep_status',
                'cc_paint_correction_status',
                'check_in_status',
                'initial_inspection_status',
                'Wash_and_decontamination_status'
            ];

            foreach ($columnsToChange as $columnName) {
                $table->text($columnName)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable()->default('Pending')->change();
            }

            // Modifying existing columns to VARCHAR type with default value 'Pending'
            $varcharColumnsToChange = [
                'cc_ceramic_coating_application_status',
                'cc_curing_phase_status',
                'window_tint_stages_status',
                'window_tint_measurement_cut_status',
                'window_tint_application_status',
                'final_stages_status',
                'final_inspection_status',
                'completion_pickup_status'
            ];

            foreach ($varcharColumnsToChange as $columnName) {
                $table->string($columnName, 255)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable()->default('Pending')->change();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('work_orders', function (Blueprint $table) {
            // Assuming the original type of all these fields was some specific type, e.g., VARCHAR(255)
            $columnsToChangeBack = [
                'general_stages_status',
                'paint_protection_film_stages_status',
                'PPF_cutting_alignment_status',
                'PPF_polish_status',
                'PPF_installation_status',
                'PPF_curing_phase_status',
                'ceramic_coating_stages_status',
                'cc_ceramic_coating_rep_status',
                'cc_paint_correction_status',
                'check_in_status',
                'initial_inspection_status',
                'Wash_and_decontamination_status',
                'cc_ceramic_coating_application_status',
                'cc_curing_phase_status',
                'window_tint_stages_status',
                'window_tint_measurement_cut_status',
                'window_tint_application_status',
                'final_stages_status',
                'final_inspection_status',
                'completion_pickup_status'
            ];

            foreach ($columnsToChangeBack as $columnName) {
                // Change back to the original type, assuming VARCHAR(255)
                // IMPORTANT: Make sure to know the original default value or set it to a sensible default
                $table->string($columnName, 255)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable()->change();
            }
        });
    }
};
