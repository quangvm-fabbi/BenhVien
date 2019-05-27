<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiuongBenhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GiuongBenh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenGiuongBenh');
            $table->string('trangThai');
            $table->integer('gia');
            $table->dateTime('ngayNhan');
            $table->integer('PhongBenh_id')->unsigned();
            $table->foreign('PhongBenh_id')
                ->references('id')
                ->on('PhongBenh')
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
        Schema::dropIfExists('GiuongBenh');
    }
}
