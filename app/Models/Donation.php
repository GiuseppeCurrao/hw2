<?php

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{

    public function donatore()
    {
        return $this->belongsTo('Donors');
    }

    public function analisi()
    {
        return $this->hasOne('Analisis');
    }
}

?>