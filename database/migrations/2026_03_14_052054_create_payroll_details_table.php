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
        Schema::create('payroll_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('allowance_id')
                ->nullable()
                ->constrained('allowances')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('deduction_id')
                ->nullable()
                ->constrained('deductions')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->enum('type', ['allowance', 'deduction']);
            $table->foreignId('payroll_id')
                ->constrained('payrolls')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->boolean('is_custom')->default(false);
            $table->string('name');
            $table->decimal('amount', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll_details');
    }
};
