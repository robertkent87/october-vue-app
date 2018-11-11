<?php namespace RobertKent\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRobertkentVuerentacarVehicles extends Migration
{
    public function up()
    {
        Schema::create('robertkent_vuerentacar_vehicles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('descritption')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('robertkent_vuerentacar_vehicles');
    }
}
