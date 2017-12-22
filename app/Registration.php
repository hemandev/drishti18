<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{

    protected $primaryKey = ['user_id', 'workshop_id'];
    public    $incrementing = false;

    public function workshop_details() {
        return $this->belongsTo('App\Workshop', 'workshop_id');
    }

}
