<?php namespace Therisingthoughts\Questions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTherisingthoughtsQuestions extends Migration
{
    public function up()
    {
        Schema::table('therisingthoughts_questions_', function($table)
        {
            $table->boolean('is_multiple')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('therisingthoughts_questions_', function($table)
        {
            $table->boolean('is_multiple')->default(null)->change();
        });
    }
}
