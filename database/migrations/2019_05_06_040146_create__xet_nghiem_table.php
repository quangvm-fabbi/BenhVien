<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXetNghiemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KetQuaXetNghiem', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ketQua');
            $table->dateTime('ngayXetNghiem');
            $table->integer('loaiXetNghiem_id')->unsigned();
            $table->foreign('loaiXetNghiem_id')
                ->references('id')
                ->on('LoaiXetNghiem')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('BenhNhan_idBenhNhan')->unsigned();
            $table->foreign('BenhNhan_idBenhNhan')
                ->references('id')
                ->on('BenhNhan')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('NhanVien_id')->unsigned();
            $table->foreign('NhanVien_id')
                ->references('id')
                ->on('NhanVien')
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
        Schema::dropIfExists('XetNghiem');
    }
}
