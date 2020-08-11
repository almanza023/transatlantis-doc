<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
    protected $table = 'contact_persons';

    protected $primaryKey = 'id_contact_person';

    public $timestamps = true;

    protected $fillable = [        
        'first_name',
        'last_name',
        'address',
        'phone',
        'email'
    ];

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = strtoupper($value);
    }

    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = strtoupper($value);
    }
}
