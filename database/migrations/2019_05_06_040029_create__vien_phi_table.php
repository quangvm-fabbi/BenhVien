<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVienPhiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VienPhi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gia');
            $table->dateTime('ngayLap');
            $table->integer('BenhAn_id')->unsigned();
            $table->foreign('BenhAn_id')
                ->references('id')
                ->on('BenhAn')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('NhanVien_id')->unsigned();
            $table->foreign('NhanVien_id')
                ->references('id')
                ->on('NhanVien')
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
        Schema::dropIfExists('VienPhi');
    }
}
