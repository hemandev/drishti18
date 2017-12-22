<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{

    protected $primaryKey = 'workshop_id';

    /**
     * A workshop will have several registrations.
     * Therefore, it's a one to many relationship.
     */
    public function registrations() {
        return $this->hasMany('App\Registration', 'workshop_id');
    }

    /**
     * The following relation maps a workshop to it's
     * scheduled date(s).
     */
    public function dates() {
        return $this->hasMany('App\WorkshopDate', 'workshop_id');
    }
}
