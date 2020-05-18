<?php namespace Kom\Cleantype\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKomCleantypeServices extends Migration
{
    public function up()
    {
        Schema::create('kom_cleantype_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->integer('cost')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kom_cleantype_services');
    }
}
