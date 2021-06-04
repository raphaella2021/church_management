<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChristianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('christian', function (Blueprint $table) {
            $table->id();
            $table->string('fname',30);
            $table->string('lname',30);
            $table->string('gender',10);
            $table->string('faname',10);
            $table->string('mname',50);
            $table->string('province',10);
            $table->string('district',13);
            $table->string('sector',20);
            $table->string('cell',20);
            $table->string('village',20);
            $table->string('cchurch',20);
            $table->interger('phone',20);
            $table->string('status',20);
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
        Schema::dropIfExists('christian');
    }
}
