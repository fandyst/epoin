<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoinDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poin_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('poins_id')->unique();
            $table->string('kode', 4)->unique();
            $table->timestamps();
            $table->foreign('poins_id')->references('id')->on('poins')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kode')->references('kode')->on('peraturans')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('poin_details');
    }
}
