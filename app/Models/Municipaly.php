<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipaly extends Model
{
    
    protected $table = 'municipalities';

    protected $primaryKey = 'id_municipality';

    public $timestamps = true;

    protected $fillable = [        
        'name',
        'id_departament', 
        
    ];

    public function departament()
    {
        return $this->belongsTo('App\Models\Departament', 'id_departament');
    }
}
