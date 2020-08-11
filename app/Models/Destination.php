<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table = 'destinations';

    protected $primaryKey = 'id_destination';

    public $timestamps = true;

    protected $fillable = [
        'id_type_customer',
        'id_municipality',
        'id_title', 
        'nid', 
        'first_name',
        'last_name',
        'full_name', 
        'address', 
        'email',
        'phone',
        'description', 
        'status', 
        
    ];

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = strtoupper($value);
    }
    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = strtoupper($value);
    }

    public function setFullNameAttribute($value)
    {
        $this->attributes['full_name'] = strtoupper($value);
    }

    
    public function type_customer()
    {
        return $this->belongsTo('App\Models\TypeCustomer', 'id_type_customer');
    }

    public function title()
    {
        return $this->belongsTo('App\Models\Title', 'id_title');
    }

    public function municipality()
    {
        return $this->belongsTo('App\Models\Municipaly', 'id_municipality');
    }
    
}
