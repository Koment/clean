<?php namespace Kom\Cleantype\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKomCleantype extends Migration
{
    public function up()
    {
        Schema::table('kom_cleantype_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('kom_cleantype_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
