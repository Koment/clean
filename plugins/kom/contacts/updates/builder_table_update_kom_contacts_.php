<?php namespace Kom\Contacts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKomContacts extends Migration
{
    public function up()
    {
        Schema::table('kom_contacts_', function($table)
        {
            $table->string('name');
            $table->string('phone');
        });
    }
    
    public function down()
    {
        Schema::table('kom_contacts_', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('phone');
        });
    }
}
