<?php

use Illuminate\Database\Eloquent\Model;

class Prenotation extends Model
{
    protected $fillable =[
        'id',
        'cai',
        'data',
        'codsede'
    ];

    public $timestamps = false;
    public function sede()
    {
        return $this->belongsTo('Sedi');
    } 

    public function donatore()
    {
        return $this->hasOne('Donor');
    }
}

?>