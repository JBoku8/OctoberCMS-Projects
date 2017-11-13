<?php namespace JanoBokuchava\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanobokuchavaMovies extends Migration
{
    public function up()
    {
        Schema::create('janobokuchava_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('year')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('janobokuchava_movies_');
    }
}
