<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('firstName')->require();
            $table->string('lastName')->require();
            $table->string('picture')->require();
            $table->string('mobile1')->require();
            $table->string('mobile2')->nullable();
            $table->string('nic')->require();
            $table->string('rvsaId')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
