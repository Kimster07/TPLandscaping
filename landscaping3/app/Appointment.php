<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//table name confirmation with protected variables.
class Appointment extends Model
{
    protected $table = 'appointments';

    protected $fillable = ['Name','Date','Time', 'Address', 'City', 'Zip', 'type'];
    protected $dates = ['created_at','updated_at'];

}
