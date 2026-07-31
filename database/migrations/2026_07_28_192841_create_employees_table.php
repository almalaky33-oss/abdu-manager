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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            // البيانات الشخصية
            $table->string('name');
            $table->string('nationality')->nullable();
            $table->string('job_title')->nullable();
            $table->string('phone')->nullable();
            $table->decimal('salary', 10, 2)->nullable();

            // الجواز
            $table->string('passport_number')->nullable();
            $table->date('passport_expiry')->nullable();

            // الإقامة
            $table->string('residence_number')->nullable();
            $table->date('residence_expiry')->nullable();

            // السفر
            $table->date('first_arrival')->nullable();
            $table->date('last_travel')->nullable();
            $table->date('return_date')->nullable();

            // الإجازة
            $table->date('vacation_start')->nullable();
            $table->date('vacation_end')->nullable();

            // ملاحظات
            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
