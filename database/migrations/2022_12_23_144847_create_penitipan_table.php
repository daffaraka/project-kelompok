<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_hewan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemilik');
            $table->string('alamat_pemilik');
            $table->string('no_hp');
            $table->string('nama_hewan');
            $table->string('jenis_kelamin');
            $table->string('tanggal_penitipan');
            $table->string('tanggal_kembali');
            $table->string('perawatan_1')->nullable();
            $table->string('perawatan_2')->nullable();
            $table->string('perawatan_3')->nullable();
            $table->string('perawatan_4')->nullable();
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
        Schema::dropIfExists('penitipan');
    }
};
