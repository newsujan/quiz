<?php namespace Therisingthoughts\Questions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTherisingthoughtsQuestions2 extends Migration
{
    public function up()
    {
        Schema::table('therisingthoughts_questions_', function($table)
        {
            $table->text('explanation')->default('null')->change();
            $table->string('difficulty', 191)->default('medium')->change();
        });
    }
    
    public function down()
    {
        Schema::table('therisingthoughts_questions_', function($table)
        {
            $table->text('explanation')->default(null)->change();
            $table->string('difficulty', 191)->default(null)->change();
        });
    }
}
