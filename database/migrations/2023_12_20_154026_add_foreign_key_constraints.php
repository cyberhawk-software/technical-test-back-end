<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        // Add constraints to turbines
        Schema::table('turbines', function (Blueprint $table) {
            $table->foreignId('farm_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        // Add constraints to components
        Schema::table('components', function (Blueprint $table) {
            $table->foreignId('component_type_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('turbine_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        // Add constraints to inspections
        Schema::table('inspections', function (Blueprint $table) {
            $table->foreignId('turbine_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        // Add constraints to grades
        Schema::table('grades', function (Blueprint $table) {
            $table->foreignId('inspection_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('component_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('grade_type_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        // Remove constraints from turbines
        Schema::table('turbines', function (Blueprint $table) {
            $table->dropForeign(['farm_id']);
        });

        // Remove constraints from components
        Schema::table('components', function (Blueprint $table) {
            $table->dropForeign(['component_type_id']);
            $table->dropForeign(['turbine_id']);
        });

        // Remove constraints from inspections
        Schema::table('inspections', function (Blueprint $table) {
            $table->dropForeign(['turbine_id']);
        });

        // Remove constraints from grades
        Schema::table('grades', function (Blueprint $table) {
            $table->dropForeign(['inspection_id']);
            $table->dropForeign(['component_id']);
            $table->dropForeign(['grade_type_id']);
        });
    }
};