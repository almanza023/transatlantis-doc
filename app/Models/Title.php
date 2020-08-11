<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $table = 'titles';

    protected $primaryKey = 'id_title';

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
