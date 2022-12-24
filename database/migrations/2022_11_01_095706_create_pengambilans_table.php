<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengambilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengambilans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengambil');
            $table->foreignId('category_id')->constrained();
            $table->integer('jumlah');
            $table->string('lokasi');
            $table->date('tanggal_ambil');
            $table->integer('status');
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
        Schema::dropIfExists('pengambilans');
    }
}
