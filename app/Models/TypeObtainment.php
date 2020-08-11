<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeObtainment extends Model
{
    protected $table = 'type_obtainments';

    protected $primaryKey = 'id_type_obtainment';

    public $timestamps = true;

    protected $fillable = [        
        'name',
        'description'
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }
}
