<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Acara extends Migration
{
    /**
     * Run the migrations.
     * =>status
     *  - 1 = tampil di useracara, superadmin (disable)
     *  - 2 = tampil di useracara, tamu acara, superadmin (enable)
     *  - 3 = tampil di superadmin (delate)
     * @return void
     */
    public function up()
    {
        Schema::create('acara', function (Blueprint $table) {
            $table->id('id_acara');
            $table->string('nama_acara');
            $table->string('keterangan');
            $table->string('email_acara');
            $table->date('tgl_start');
            $table->date('tgl_end');
            $table->integer('id_user_acara');
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
        Schema::dropIfExists('acara');
    }
}
