<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnsToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // $table->date('tanggal')->nullable();
            // $table->time('jam_mulai')->nullable();
            // $table->time('jam_selesai')->nullable();
            // $table->string('harga');
            $table->string('harga_diskon')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // $table->dropColumn('harga');
            // $table->dropColumn('jam_mulai');
            // $table->dropColumn('jam_selesai');
            // $table->dropColumn('showtime');
            $table->dropColumn('harga');
            // $table->dropColumn('harga_diskon');
        });
    }
}
