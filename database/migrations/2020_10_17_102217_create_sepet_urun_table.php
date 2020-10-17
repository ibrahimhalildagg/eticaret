<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSepetUrunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepet_uruns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sepet_id');
            $table->foreign('sepet_id')->references('id')->on('sepets')->onDelete('cascade');
            $table->unsignedBigInteger('urun_id');
            $table->foreign('urun_id')->references('id')->on('uruns')->onDelete('cascade');
            $table->integer('adet');
            $table->decimal('fiyat',6,2);
            $table->string('durum',30);
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
        Schema::dropIfExists('sepet_uruns');
    }
}
