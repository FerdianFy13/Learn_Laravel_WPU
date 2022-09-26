<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestingQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testing_queries', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tagihan', 255);
            $table->integer('jumlahtagihan_tagihan');
            $table->tinyInteger('bulan_tagihan');
            $table->string('status_tagihan', 255);
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
        Schema::dropIfExists('testing_queries');
    }
}
