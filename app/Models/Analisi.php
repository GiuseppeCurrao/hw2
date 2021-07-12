<?php

use Illuminate\Database\Eloquent\Model;

class Analisi extends Model
{

    protected $fillable =[
        'id',
        'codmed',
        'coddona',
        'malinf',
        'valemo'
    ];

    public $timestamps = false;

    public function dottore()
    {
        return $this->belongsTo('Pers');
    }

    public function donazione()
    {
        return $this->hasOne('Donations');
    }
}

?>