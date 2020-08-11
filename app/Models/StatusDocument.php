<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusDocument extends Model
{
    protected $table = 'status_documents';

    protected $primaryKey = 'id_status_document';


    public $timestamps = true;

    protected $fillable = [        
        
        'description'
        
    ];

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = strtoupper($value);
    }
}
