<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // required fields
    protected $fillable = array('id', 'name', 'email','contact_number','position');
}
