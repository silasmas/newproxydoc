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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('type')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('moyenPaiement')->nullable();
            $table->string('reference')->nullable();
            $table->string('token')->nullable();
            $table->string('operateur')->nullable();
            $table->string('message')->nullable();
            $table->string('description')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('customer_city')->nullable();
            $table->string('customer_country')->nullable();
            $table->string('customer_state')->nullable();
            $table->string('customer_zip_code')->nullable();
            $table->string('reponse')->nullable();
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
        Schema::dropIfExists('paiements');
    }
};
