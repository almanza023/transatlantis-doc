<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeDocument extends Model
{
    protected $table = 'type_documents';

    protected $primaryKey = 'id_type_document';

    public $timestamps = true;

    protected $fillable = [        
        'description'
    ];

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = strtoupper($value);
    }
}
