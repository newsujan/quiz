<?php namespace Therisingthoughts\Questions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTherisingthoughtsQuestions3 extends Migration
{
    public function up()
    {
        Schema::table('therisingthoughts_questions_', function($table)
        {
            $table->text('answer');
        });
    }
    
    public function down()
    {
        Schema::table('therisingthoughts_questions_', function($table)
        {
            $table->dropColumn('answer');
        });
    }
}
