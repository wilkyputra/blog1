<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dosbing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosbing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nama_Dosen');
            $table->string('Mata_Pelajaran');
            $table->string('Alamat');
            $table->string('Jabatan');
            $table->bigInteger('dosbing_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('dosbing_id')->references('id')->on('mahasiswa')->onDelete('cascade');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosbing');
    }
}
