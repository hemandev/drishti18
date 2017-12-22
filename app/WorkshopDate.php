<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkshopDate extends Model
{
    protected  $primaryKey = ['workshop_id', 'wdate'];
    public     $incrementing = false;
}
