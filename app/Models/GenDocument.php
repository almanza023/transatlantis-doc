<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GenDocument extends Model
{
    protected $table = 'gen_documents';

    protected $primaryKey = 'id_gen_document';

    public $timestamps = true;

    protected $fillable = [        
        'id_document',
        'id_user', 
        'id_status_document', 
        'id_type_obtainment', 
        'id_destination', 
        'name', 
        'extension', 
        'numdoc', 
        'num_folios', 
        'num_image', 
        'description', 
        'reference', 
        'ruta', 
        'date'
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }

    
    public function document()
    {
        return $this->belongsTo('App\Models\Document', 'id_document');
    }

    public function type_obtainment()
    {
        return $this->belongsTo('App\Models\StatusDocument', 'id_status_document');
    }

    public function status_document()
    {
        return $this->belongsTo('App\Models\TypeObtainment', 'id_type_obtainment');
    }
    
    public function destination()
    {
        return $this->belongsTo('App\Models\Destination', 'id_destination');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
