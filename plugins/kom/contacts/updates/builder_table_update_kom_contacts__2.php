<?php namespace Kom\Contacts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKomContacts2 extends Migration
{
    public function up()
    {
        Schema::table('kom_contacts_', function($table)
        {
            $table->renameColumn('date', 'created_at');
        });
    }
    
    public function down()
    {
        Schema::table('kom_contacts_', function($table)
        {
            $table->renameColumn('created_at', 'date');
        });
    }
}
