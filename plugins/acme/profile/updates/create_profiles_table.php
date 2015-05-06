<?php namespace Acme\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateProfilesTable extends Migration
{

    public function up()
    {
        Schema::create('acme_profile_profiles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            /*            
            $table->string('headline')->nullable();
            $table->text('about_me')->nullable();
            $table->text('interests')->nullable();
            $table->text('books')->nullable();
            $table->text('music')->nullable();            
            */
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acme_profile_profiles');
    }

}
