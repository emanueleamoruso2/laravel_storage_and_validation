<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //lavarel utilizza un tipo di proprietà che si chiama fillable cioè tutto ciò che è rimpeibile e questa proprietà definisce i campi del mio modello
    protected $fillable=[
        'name',
        'description',
        'price',
        'img'
    ];
}
