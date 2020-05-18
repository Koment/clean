<?php namespace Kom\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKomOrder extends Migration
{
    public function up()
    {
        Schema::create('kom_order_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('cleantype');
            $table->dateTime('date');
            $table->string('place');
            $table->string('area');
            $table->string('phone');
            $table->boolean('done')->default(0);
            $table->timestamp('created_at');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kom_order_');
    }
}
