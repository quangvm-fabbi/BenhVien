<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NhanVien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->dateTime('ngaySinh');
            $table->string('gioiTinh');
            $table->integer('CMND');
            $table->string('diaChi');
            $table->integer('soDienThoai');
            $table->string('email');
            $table->string('hinhAnh');
            $table->string('chucVu');
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
        Schema::dropIfExists('NhanVien');
    }
}
