<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuocPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DuocPham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenDuocPham');
            $table->integer('donGia');
            $table->dateTime('hanSudung');
            $table->dateTime('ngaySanXuat');
            $table->string('nuocSanXuat');
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
        Schema::dropIfExists('DuocPham');
    }
}
