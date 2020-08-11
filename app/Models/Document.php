<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';

    protected $primaryKey = 'id_document';

    public $timestamps = true;

    protected $fillable = [        
        'id_type_document',
        'name', 
        'version', 
        'date'
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }
}
