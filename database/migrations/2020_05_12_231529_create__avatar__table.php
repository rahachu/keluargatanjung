<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvatarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_avatar_', function (Blueprint $table) {
            $table->id();
            $table->char('panggilan', 10);
            $table->integer('x');
            $table->integer('y');
            $table->integer('newHeight');
            $table->integer('newWidth');
            $table->integer('originalHeight');
            $table->integer('originalWidth');
            $table->float('zoom');
            $table->binary('gambar');
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
        Schema::dropIfExists('_avatar_');
    }
}
