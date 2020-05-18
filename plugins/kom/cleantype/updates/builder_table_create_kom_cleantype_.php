<?php namespace Kom\Cleantype\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKomCleantype extends Migration
{
    public function up()
    {
        Schema::create('kom_cleantype_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('type', 191);
            $table->integer('cost');
            $table->text('description');
            $table->string('title', 191);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kom_cleantype_');
    }
}
