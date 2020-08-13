<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /* Enables mass assignment for all the fields inside the array */
    protected $fillable = ['name'];

    /* Enables mass assignment for all the model Service */
    //protected $guarded = [];

    /* Blocks mass assignment to all model Service */
    //protected $guarded = ['*'];
}
