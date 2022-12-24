<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categories_id')->constrained();
            $table->foreignId('products_id')->constrained();
            $table->string('grade');
            $table->string('screen');
            $table->string('above');
            $table->string('defect');
            $table->string('imperfect');
            $table->string('process');
            $table->string('variety');
            $table->string('maisture');
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
        Schema::dropIfExists('detail_grades');
    }
}
