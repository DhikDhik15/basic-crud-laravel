<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCandidates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('education')->nullable();
            $table->date('birthday')->nullable();
            $table->tinyInteger('experience')->nullable();
            $table->string('last_position')->nullable();
            $table->string('applied_position')->nullable();
            $table->string('top_skills')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('resume')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
