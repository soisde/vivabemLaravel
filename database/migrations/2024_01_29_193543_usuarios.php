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
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nome', 255);
            $table->string('email', 255)->unique();
            $table->string('senha', 255);
            $table->integer('tipo_usuario_id');
            $table->enum('tipo_usuario_type', ['admin', 'user']); // Adjust with actual types
            $table->timestamp('email_verificado_em')->nullable();
            $table->string('token_lembrete', 100)->nullable();
            $table->timestamps(); // This will create 'criado_em' and 'atualizado_em' columns with current timestamp as default value

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
