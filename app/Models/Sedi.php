<?php

use Illuminate\Database\Eloquent\Model;

class Sedi extends Model
{

    public function prenotazioni()
    {
        return $this->hasMany('Prenotation');
    }
}

?>