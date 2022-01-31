<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userr', function (Blueprint $table) {
            $table->id();
            $table->string('nama',100);
            $table->string('username',30);
            $table->text('password');
            $table->integer('id_outlet');
            $table->enum('role',['admin','kasir','owner']);
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
        Schema::dropIfExists('userr');
    }
}
