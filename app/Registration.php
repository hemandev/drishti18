<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{

    protected $primaryKey = ['user_id', 'workshop_id'];

    /**
     * Retrieve details of workshop registered for.
     */
    public function registered_workshops() {
        return $this->belongsTo('App\Workshop', 'workshop_id');
    }
}
