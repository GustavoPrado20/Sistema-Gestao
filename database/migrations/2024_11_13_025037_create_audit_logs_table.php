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
        Schema::create('audit_logs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable(); // Usuário que realizou a ação
            $table->string('acao'); // Tipo de ação (create, update, delete)
            $table->string('entidade_type'); // Nome da entidade (Ex: GrupoEconomico)
            $table->unsignedBigInteger('entidade_id'); // ID da entidade afetada
            $table->json('changes')->nullable(); // Alterações feitas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit_logs');
    }
};
