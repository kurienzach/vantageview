<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    //
    protected $fillable = ['flat_id', 'availability', 'basic_rate', 'area', 'category', 'booked_user_name', 'booked_user_mail', 'booked_user_mobile', 'booked_user_address', 'agreement_value', 'grand_total'];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function booking()
    {
        if ($this->booked_id != null){
            return $this->belongsTo('App\Booking', 'booked_id');
        }
    }
}
