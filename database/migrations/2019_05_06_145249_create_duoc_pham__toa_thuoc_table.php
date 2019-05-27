<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuocPhamToaThuocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DuocPham_PhacDo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('PhacDo_id')->unsigned();
            $table->integer('DuocPham_id')->unsigned();
            $table->foreign('DuocPham_id')
                ->references('id')
                ->on('DuocPham')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('PhacDo_id')
                ->references('id')
                ->on('PhacDo')
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
        Schema::dropIfExists('duocPham_ToaThuoc');
    }
}
