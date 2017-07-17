<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeraturansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peraturans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode', 4)->unique();
            $table->text('nama_peraturan');
            $table->integer('poin');
        });

        // Insert peraturan awal
        DB::table('peraturans')->insert(
            array(
                'kode' => 'R000',
                'nama_peraturan' => 'Siswa Baru',
                'poin' => env('APP_POINAWAL')
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('peraturans');
    }
}
