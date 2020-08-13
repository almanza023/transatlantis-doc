<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = 'routes';

    protected $primaryKey = 'id_route';

    public $timestamps = true;

    protected $fillable = [        
        'description',
        'id_dependence',
        'status',         
    ];

    
   

    
}
