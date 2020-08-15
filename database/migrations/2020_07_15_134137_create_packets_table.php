<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengirim');
            $table->string('nohp_pengirim');
            $table->string('alamat_pengirim');
            $table->string('nama_penerima');
            $table->string('nohp_penerima');
            $table->string('tujuan_pkt');
            $table->string('alamat_penerima');
            $table->string('jenis_pkt');
            $table->integer('berat_pkt');
            $table->string('kemasan_pkt');
            $table->integer('volume_pkt');
            $table->string('pengiriman_pkt');
            $table->datetime('end_pkt');
            $table->string('status_pkt');
            $table->string('resi_pkt');
            $table->string('ongkir_pkt');
            $table->integer('id_companies');
            
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
        Schema::dropIfExists('packets');
    }
}
