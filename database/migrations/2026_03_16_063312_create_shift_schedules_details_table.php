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
        Schema::create('shift_schedules_details', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_off')->default(false);
            $table->foreignId('employee_id')
                    ->constrained('employees')
                    ->cascadeOnUpdate()
                    ->restrictOnDelete();
            $table->foreignId('shift_id')
                    ->nullable()
                    ->constrained('shifts')
                    ->nullOnDelete();
            $table->foreignId('shift_schedule_id')
                    ->constrained('shift_schedules')
                    ->cascadeOnUpdate()
                    ->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shift_schedules_details');
    }
};
