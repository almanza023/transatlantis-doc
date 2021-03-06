<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependece extends Model
{
    protected $table = 'dependences';

    protected $primaryKey = 'id_dependence';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'description'
    ];

    
    public function route()
    {
        return $this->belongsTo('App\Models\Route', 'id_dependence');
    }
    
}
