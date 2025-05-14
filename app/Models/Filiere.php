<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\Factories\HasFactory;
 

class Filiere extends Model
{
    use HasFactory;
    public function eleves()
{
    return $this->hasMany(Eleve::class);
}

public function cours()
{
    return $this->hasMany(Cours::class);
}
}
