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
        Schema::create('udaras', function (Blueprint $table) {
            $table->id();
            $table->string('mq_135');
            $table->string('mq_09');
            $table->string('mq_07');
            $table->string('mq_02');
            $table->string('mq_05');
            $table->timestamp('timestamps');
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
        Schema::dropIfExists('udaras');
    }
};
