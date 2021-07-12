<?php

use Illuminate\Database\Eloquent\Model;

class Pers extends Model
{
    protected $hidden = ['password'];

    public function analisi()
    {
        return $this->hasMany('Analisi');
    }
}

?>