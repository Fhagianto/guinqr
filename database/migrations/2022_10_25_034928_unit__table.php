<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UnitTable extends Migration
{
    /**
     * Run the migrations.
     *  - 1 = tampil di admin, superadmin (disable)
     *  - 2 = tampil di admin, tamu acara, superadmin (enable)
     *  - 3 = tampil di superadmin (delate)
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id('id_unit');
            $table->string('nama_unit');
            $table->string('keterangan');
            $table->string('email_unit')->unique();
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
        Schema::dropIfExists('units');
    }
}
