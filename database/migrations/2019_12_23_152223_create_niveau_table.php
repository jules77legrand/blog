<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNiveauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niveau', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('licence1');
            $table->integer('licence2');
            $table->integer('licence3');
            $table->integer('master1');
            $table->integer('master2');
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
        Schema::dropIfExists('niveau');
    }
}
