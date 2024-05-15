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
        Schema::create('observacaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->unsignedBigInteger('funcionario_id');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            $table->unsignedBigInteger('atividade_funcionario_id');
            $table->foreign('atividade_funcionario_id')->references('id')->on('atividade_funcionarios');
            $table->longText('message');
            $table->unsignedBigInteger('sender_id');
            $table->foreign('sender_id')->references('id')->on('users');
            $table->tinyInteger('sender_type')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('observacaos');
    }
};
