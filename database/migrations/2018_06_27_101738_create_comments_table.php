<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('content');
            $table->timestamps();
=======
        $table->increments('id');
        $table->integer('comment_id')->unsigned()->index();
        $table->string('content');
        
        $table->timestamps();
        $table->foreign('comment_id')->references('id')->on('newsposts');
>>>>>>> f0e3f236aeb73a4b96645d9cabbde0f286053d5c
        });
    }
       
    
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
