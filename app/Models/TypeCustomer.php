<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeCustomer extends Model
{
    protected $table = 'type_customers';

    protected $primaryKey = 'id_type_customer';

    public $timestamps = true;

    protected $fillable = [        
        'description'
    ];

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = strtoupper($value);
    }
}
