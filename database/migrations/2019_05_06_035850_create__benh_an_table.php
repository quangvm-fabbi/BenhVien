<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenhAnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BenhAn', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('ngayVao');
            $table->dateTime('ngayRa');
            $table->string('ghiChu');
            $table->string('ketQuaDieuTri');
            $table->string('chuanDoan');
            $table->integer('BenhNhan_idBenhNhan')->unsigned();
            $table->foreign('BenhNhan_idBenhNhan')
                ->references('id')
                ->on('BenhNhan')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('PhuongPhapPhauThuat_id')->unsigned();
            $table->foreign('PhuongPhapPhauThuat_id')
                ->references('id')
                ->on('PhuongPhapPhauThuat')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('BanhAn');
    }
}
