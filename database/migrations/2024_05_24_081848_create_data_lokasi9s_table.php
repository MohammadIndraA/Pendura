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
        Schema::create('data_lokasi9s', function (Blueprint $table) {
            $table->id();
            $table->string('mq_135');
            $table->string('mq_09');
            $table->string('mq_07');
            $table->unsignedBigInteger('lokasi_id');
            $table->foreign('lokasi_id')->references('id')->on('lokasis');
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
        Schema::dropIfExists('data_lokasi9s');
    }
};
