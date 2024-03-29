<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table = 'pizzas';

    protected $fillable = [
        'pizza_name', 'size', 'flavour',
    ];
}
