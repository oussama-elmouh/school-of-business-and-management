<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cours extends Model
{
    use HasFactory;
    public function filiere()
{
    return $this->belongsTo(Filiere::class);
}

public function professeur()
{
    return $this->belongsTo(Professeur::class);
}

}
