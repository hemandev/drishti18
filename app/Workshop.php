<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    //

    /**
     * A workshop will have several registrations.
     * Therefore, it's a one to many relationship.
     */
    public function registration() {
        return $this->hasMany('App\Registration', 'workshop_id');
    }

    /**
     * The following relations maps a workshop to it's
     * scheduled date.
     */
    public function dates() {
        return $this->hasMany('App\WorkshopDate', 'workshop_id');
    }
}
