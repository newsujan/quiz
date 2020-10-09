<?php namespace Therisingthoughts\Questions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTherisingthoughtsQuestions extends Migration
{
    public function up()
    {
        Schema::create('therisingthoughts_questions_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name')->nullable();
            $table->text('option');
            $table->boolean('is_multiple');
            $table->text('explanation');
            $table->string('difficulty');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('therisingthoughts_questions_');
    }
}
