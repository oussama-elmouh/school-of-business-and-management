<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Professeur extends Model
{
    use HasFactory;
    public function cours()
{
    return $this->hasMany(Cours::class);
}
}
