<?php namespace Kom\Contacts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKomContacts extends Migration
{
    public function up()
    {
        Schema::create('kom_contacts_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('subject');
            $table->boolean('complete')->default(0);
            $table->dateTime('date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kom_contacts_');
    }
}
