<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');       
            $table->string('name');
        
            $table->string('description');
            $table->enum('level', [1, 2, 3]);
            $table->boolean('type')->default(0);
            $table->tinyInteger('status')->default(1)->unsigned();
//            $table->integer('teacher_id')->unsigned();
            $table->string('slug')->unique();
            //foreign keys
 //           $table->foreign('teacher_id')->references('id')->on('users');
            $table->rememberToken();
              $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
}
