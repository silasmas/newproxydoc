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
        Schema::create('produit_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produit_id')->constrained()->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('etat')->default('0');
            $table->string('livraison')->default('0');
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
        Schema::dropIfExists('produit_users');
    }
};
