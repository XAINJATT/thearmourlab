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
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('work_orders', function (Blueprint $table) {
            // Ceramic Coating
            $table->dropColumn('ceramic_coating_kenzo_coating');
            $table->dropColumn('ceramic_coating_quartz_plus_coating');
            $table->dropColumn('ceramic_coating_quartz_coating');
            $table->dropColumn('ceramic_coating_premier_coating');
            $table->dropColumn('ceramic_coating_interior_pkg');
            $table->dropColumn('ceramic_coating_wheels_of_pkg');
            $table->dropColumn('ceramic_coating_price');

            // PPF
            $table->dropColumn('ppf_full_car');
            $table->dropColumn('ppf_full_front_end');
            $table->dropColumn('ppf_partial_front_end');
            $table->dropColumn('ppf_partial_kit');
            $table->dropColumn('ppf_rockers');
            $table->dropColumn('ppf_headlights');
            $table->dropColumn('ppf_luggage_strip');
            $table->dropColumn('ppf_price');

            // Window Tinting
            $table->dropColumn('wt_front_windows');
            $table->dropColumn('wt_full_vehicle');
            $table->dropColumn('wt_windshield');
            $table->dropColumn('wt_5');
            $table->dropColumn('wt_20');
            $table->dropColumn('wt_35');
            $table->dropColumn('wt_50');
            $table->dropColumn('wt_70');
            $table->dropColumn('wt_price');

            // Paint Correction
            $table->dropColumn('pc_one_stage');
            $table->dropColumn('pc_two_stage');
            $table->dropColumn('pc_three_stage');
            $table->dropColumn('pc_wet_sand');
            $table->dropColumn('pc_price');

            // Other Services
            $table->dropColumn('os_interior_detailing');
            $table->dropColumn('os_car_wrap');
            $table->dropColumn('os_rim_powder_coating');
            $table->dropColumn('os_rim_repair');
            $table->dropColumn('os_dent_repair');
            $table->dropColumn('os_caliper_painting');
            $table->dropColumn('os_price');
        });
    }
};
