<?php namespace Mhaynes\ScenarioBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateScenariosTable extends Migration
{

    public function up()
    {
        Schema::create('mhaynes_scenariobuilder_scenarios', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('ScID')->unsigned()->index();
            $table->string('ScHeadline')->nullable();
            $table->text('ScDescription')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mhaynes_scenariobuilder_scenarios');
    }

}
