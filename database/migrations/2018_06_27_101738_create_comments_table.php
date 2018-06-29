<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {

        $table->increments('id');
        $table->integer('comment_id')->unsigned()->index();
        $table->string('content');
        
        $table->timestamps();
        $table->foreign('comment_id')->references('id')->on('newsposts');

        });
    }
       
    
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
