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
        Schema::create('alerts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('path')->nullable();
            $table->foreignId('ville_id')->nullable()->constrained('villes')->onUpdate('cascade')->onDelete('cascade');
            $table->string('longitude');
            $table->string('latitude');
            $table->mediumText('message');
            $table->string('statut')->default(0);
            $table->string('Valide')->default(0);
            $table->foreignId('agent_id')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('isDelete')->default(0);
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
        Schema::dropIfExists('alerts');
    }
};
