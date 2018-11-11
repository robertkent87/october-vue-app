<?php namespace RobertKent\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRobertkentVuerentacarVehicles extends Migration
{
    public function up()
    {
        Schema::table('robertkent_vuerentacar_vehicles', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('title')->change();
            $table->string('slug')->change();
            $table->renameColumn('descritption', 'description');
        });
    }
    
    public function down()
    {
        Schema::table('robertkent_vuerentacar_vehicles', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('title', 191)->change();
            $table->string('slug', 191)->change();
            $table->renameColumn('description', 'descritption');
        });
    }
}
