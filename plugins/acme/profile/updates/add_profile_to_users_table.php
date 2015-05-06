<?php namespace Acme\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddProfileFieldsToUsersTable extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('headline')->nullable();
            $table->text('about_me')->nullable();
            $table->text('interests')->nullable();
            $table->text('books')->nullable();
            $table->text('music')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            
            $table->dropColumn([
                'headline',
                'about_me',
                'interests',
                'books',
                'music'
                ]);
                
        });

        //Schema::dropIfExists('users');
    }

}
