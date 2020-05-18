<?php namespace Kom\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKomOrder2 extends Migration
{
    public function up()
    {
        Schema::table('kom_order_', function($table)
        {
            $table->dateTime('date')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('kom_order_', function($table)
        {
            $table->date('date')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
