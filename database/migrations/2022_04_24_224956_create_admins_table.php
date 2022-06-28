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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom')->nullable();
            $table->string('email')->unique();
            $table->string('telephone')->unique();
            $table->string('sexe')->nullable();
            $table->text('adresse')->nullable();
            $table->string('pays')->nullable();
            $table->string('ville')->nullable();
            $table->string('fonction')->nullable();
            $table->enum('role', array('agent','admin','docteur'))->default('agent');
            $table->enum('niveau', array('1','2','3','4'))->default('1');
            $table->date('datenaissance')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('admins');
    }
};
