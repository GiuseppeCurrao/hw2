<?php

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $hidden = ['password'];
    protected $fillable =[
        'id',
        'nome',
        'cognome',
        'cf',
        'mail',
        'psw'
    ];
    protected $autoIncrement= false;
    public $timestamps = false;

    public function donazioni()
    {
        return $this->hasMany('Donation');
    } 

    public function prenotazioni()
    {
        return $this->hasOne('Prenotation');
    }
}

?>