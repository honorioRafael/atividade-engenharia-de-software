<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birth_date');
            $table->string('cpf', 14)->unique(); // Formato típico: 000.000.000-00
            $table->string('address');
            $table->string('telephone', 20)->nullable();
            $table->unsignedBigInteger('department_id');
            $table->timestamps();

            $table->foreign('department_id')
                ->references('id')
                ->on('department')
                ->onDelete('cascade'); // ou 'set null' se preferir
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
}
