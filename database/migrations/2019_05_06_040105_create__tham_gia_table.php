<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThamGiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ThamGia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vaiTro');
            $table->integer('BenhAn_id')->unsigned();
            $table->foreign('BenhAn_id')
                ->references('id')
                ->on('BenhAn')
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
        Schema::dropIfExists('ThamGia');
    }
}
