<?php namespace Kom\Cleantype\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKomCleantypeServicesPivot extends Migration
{
    public function up()
    {
        Schema::create('kom_cleantype_services_pivot', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('cleantype_id');
            $table->integer('service_id');
            $table->primary(['cleantype_id','service_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kom_cleantype_services_pivot');
    }
}
