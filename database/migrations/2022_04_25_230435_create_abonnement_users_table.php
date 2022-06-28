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
        Schema::create('abonnement_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('abonnement_id')->constrained()->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('date_debut')->nullable();
            $table->string('date_fin')->nullable();
            $table->string('etat')->default('En attente');
            $table->string('transaction_id')->unique()->nullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abonnement_users');
    }
};
