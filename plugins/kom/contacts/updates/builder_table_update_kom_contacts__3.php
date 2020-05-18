<?php namespace Kom\Contacts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKomContacts3 extends Migration
{
    public function up()
    {
        Schema::table('kom_contacts_', function($table)
        {
            $table->string('email', 191);
            $table->renameColumn('description', 'message');
            $table->renameColumn('complete', 'viewed');
            $table->dropColumn('title');
            $table->dropColumn('subject');
            $table->dropColumn('phone');
        });
    }
    
    public function down()
    {
        Schema::table('kom_contacts_', function($table)
        {
            $table->dropColumn('email');
            $table->renameColumn('message', 'description');
            $table->renameColumn('viewed', 'complete');
            $table->string('title', 191);
            $table->string('subject', 191);
            $table->string('phone', 191);
        });
    }
}
