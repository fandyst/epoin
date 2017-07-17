<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDasborsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dasbors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('desc');
            $table->unsignedInteger('users_id')->unique();
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        //insert dasbor awal
        DB::table('dasbors')->insert(
            array(
                'id' => '1',
                'title' => 'Informasi',
                'desc' => 'Terima kasih telah menggunakan sistem e-Poin. Silakan dipergunakan sesuai dengan kebutuhan. Jika ada pertanyaan dapat menghubungi saya melalui email di me@fandyst.com ataupun melalui halaman kontak di www.fandyst.com.',
                'users_id' => '1'
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
        Schema::drop('dasbors');
    }
}
