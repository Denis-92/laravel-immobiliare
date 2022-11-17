<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //
    protected $fillable = [
        'dimensione',
        'descrizione',
        'prezzo',
        'classe_energetica',
        'indirizzo',
        'piani',
        'proprietario',
        'numero_di_stanze',
        'data_di_costruzione',
        'garage',

    ];
}
