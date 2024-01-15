<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected $fillable = ["code","name"];
    public function etudiants(){
        return $this->hasMany(Etudiant::class);
    }
    public function structures()
    {
        return $this->belongsToMany(Structure::class);
    }
}
