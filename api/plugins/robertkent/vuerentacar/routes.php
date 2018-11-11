<?php

use RobertKent\Vuerentacar\Models\Vehicle;

Route::get('vehicles', function () {
  $vehicles = Vehicle::all();
  return $vehicles;
});