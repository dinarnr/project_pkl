<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PengajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->increments('id_pengajuan');
            $table->string('noPO',50);
            $table->string('namaBarang',50);
            $table->string('jenisBarang',50);
            $table->integer('jmlBarang');
            $table->string('status',50);
            $table->string('keterangan',50);
            $table->string('pic_teknisi',50);
            $table->string('pic_marketing',50);
            $table->string('pic_warehouse',50);
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
        Schema::dropIfExists('pengajuan');
    }
}