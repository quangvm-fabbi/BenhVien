<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenhNhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BenhNhan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hoTen');
            $table->dateTime('ngayVao');
            $table->string('diaChi');
            $table->dateTime('ngaySinh');
            $table->dateTime('ngayVaoDT');
            $table->string('khoaVao');
            $table->integer('soDienThoai');
            $table->string('khoaDieuTri');
            $table->string('ngheNghiep');
            $table->string('hinhAnh');
            $table->integer('GiuongBenh_id')->unsigned();
            $table->foreign('GiuongBenh_id')
                ->references('id')
                ->on('GiuongBenh')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('BenhNhan');
    }
}
